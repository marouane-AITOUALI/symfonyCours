<?php /** @noinspection PhpUnhandledExceptionInspection */

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Comment;
use App\Entity\Episode;
use App\Entity\Language;
use App\Entity\Media;
use App\Entity\Movie;
use App\Entity\Playlist;
use App\Entity\PlaylistMedia;
use App\Entity\PlaylistSubscription;
use App\Entity\Season;
use App\Entity\Serie;
use App\Entity\Subscription;
use App\Entity\SubscriptionHistory;
use App\Entity\User;
use App\Enum\CommentStatusEnum;
use App\Enum\UserAccountStatusEnum;
use DateTime;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class AppFixtures extends Fixture
{
    public const MAX_USERS = 10;
    public const MAX_MEDIA = 100;
    public const MAX_SUBSCRIPTIONS = 3;
    public const MAX_SEASONS = 3;
    public const MAX_EPISODES = 10;

    public const PLAYLISTS_PER_USER = 3;
    public const MAX_MEDIA_PER_PLAYLIST = 3;
    public const MAX_LANGUAGE_PER_MEDIA = 3;
    public const MAX_CATEGORY_PER_MEDIA = 3;
    public const MAX_SUBSCRIPTIONS_HISTORY_PER_USER = 3;
    public const MAX_COMMENTS_PER_MEDIA = 10;
    public const MAX_PLAYLIST_SUBSCRIPTION_PER_USERS = 3;

    public function load(ObjectManager $manager): void
    {
        $users = [];
        $medias = [];
        $playlists = [];
        $categories = [];
        $languages = [];
        $subscriptions = [];

        $this->createUsers(manager: $manager, users: $users);
        $this->createPlaylists(manager: $manager, users: $users, playlists: $playlists);
        $this->createSubscriptions(manager: $manager, users: $users, subscriptions: $subscriptions);
        $this->createCategories(manager: $manager, categories: $categories);
        $this->createLanguages(manager: $manager, languages: $languages);
        $this->createMedia(manager: $manager, medias: $medias);
        $this->createComments(manager: $manager, medias: $medias, users: $users);

        $this->linkMediaToPlaylists(items: $medias, lists: $playlists, manager: $manager);
        $this->linkSubscriptionToUsers(users: $users, plans: $subscriptions, manager: $manager);
        $this->linkMediaToCategories(items: $medias, groups: $categories);
        $this->linkMediaToLanguages(items: $medias, languages: $languages);
        $this->addUserPlaylistSubscriptions(manager: $manager, users: $users, playlists: $playlists);

        $manager->flush();
    }

    protected function createUsers(ObjectManager $manager, array &$users): void
    {
        for ($i = 0; $i < self::MAX_USERS; $i++) {
            $profile = new User();
            $profile->setEmail(email: "user_$i@sample.com");
            $profile->setUsername(username: "profile_$i");
            $profile->setPassword(password: "securepass$i");
            $profile->setAccountStatus(accountStatus: UserAccountStatusEnum::ACTIVE);
            $users[] = $profile;

            $manager->persist(object: $profile);
        }
    }

    protected function createMedia(ObjectManager $manager, array &$medias): void
    {
        for ($j = 0; $j < self::MAX_MEDIA; $j++) {
            $content = random_int(min: 0, max: 1) === 0 ? new Movie() : new Serie();
            $type = $content instanceof Movie ? 'Movie' : 'Series';

            $content->setTitle(title: "{$type} Title $j");
            $content->setLongDescription(longDescription: "Detailed description $j");
            $content->setShortDescription(shortDescription: "Summary $j");
            $content->setCoverImage(coverImage: "https://example.com/image_$j.jpg");
            $content->setReleaseDate(releaseDate: new DateTime(datetime: "+10 days"));
            $manager->persist(object: $content);
            $medias[] = $content;

            $this->addTeamAndCast(media: $content);

            if ($content instanceof Serie) {
                $this->createSeasons(manager: $manager, media: $content);
            }

    //        if ($content instanceof Movie) {
    //            $content->setDuration(duration: random_int(90, 200));
    //        }
        }
    }

    protected function createSubscriptions(ObjectManager $manager, array $users, array &$subscriptions): void
    {
        $options = [
            ['name' => '1-Month Standard Plan', 'duration' => 1, 'price' => 5],
            ['name' => '3-Month Standard Plan', 'duration' => 3, 'price' => 12],
            ['name' => '6-Month Standard Plan', 'duration' => 6, 'price' => 20],
            ['name' => '1-Year Standard Plan', 'duration' => 12, 'price' => 35],
            ['name' => '1-Month Premium Plan', 'duration' => 1, 'price' => 8],
            ['name' => '3-Month Premium Plan', 'duration' => 3, 'price' => 20],
            ['name' => '6-Month Premium Plan', 'duration' => 6, 'price' => 35],
            ['name' => '1-Year Premium Plan', 'duration' => 12, 'price' => 60],
        ];

        foreach ($options as $option) {
            $subscription = new Subscription();
            $subscription->setDuration(duration: $option['duration']);
            $subscription->setName(name: $option['name']);
            $subscription->setPrice(price: $option['price']);
            $manager->persist(object: $subscription);
            $subscriptions[] = $subscription;

            for ($i = 0; $i < random_int(min: 1, max: self::MAX_SUBSCRIPTIONS); $i++) {
                $randomProfile = $users[array_rand(array: $users)];
                $randomProfile->setCurrentSubscription(currentSubscription: $subscription);
            }
        }
    }

    public function createPlaylists(ObjectManager $manager, array $users, array &$playlists): void
    {
        foreach ($users as $account) {
            for ($i = 0; $i < self::PLAYLISTS_PER_USER; $i++) {
                $tracklist = new Playlist();
                $tracklist->setName(name: "Playlist utilisateur $i");
                $tracklist->setCreatedAt(createdAt: new DateTimeImmutable());
                $tracklist->setUpdatedAt(updatedAt: new DateTimeImmutable());
                $tracklist->setCreator(creator: $account);
                $playlists[] = $tracklist;

                $manager->persist(object: $tracklist);
            }
        }
    }

    protected function createCategories(ObjectManager $manager, array &$categories): void
    {
        $list = [
            ['title' => 'Adventure', 'tag' => 'Aventure'],
            ['title' => 'Comedy', 'tag' => 'Comédie'],
            ['title' => 'Drama', 'tag' => 'Drame'],
            ['title' => 'Horror', 'tag' => 'Horreur'],
            ['title' => 'Sci-Fi', 'tag' => 'Science-fiction'],
            ['title' => 'Mystery', 'tag' => 'Thriller'],
        ];

        foreach ($list as $item) {
            $genre = new Category();
            $genre->setNom(nom: $item['title']);
            $genre->setLabel(label: $item['tag']);
            $manager->persist(object: $genre);
            $categories[] = $genre;
        }
    }

    protected function createLanguages(ObjectManager $manager, array &$languages): void
    {
        $languagesList = [
            ['code' => 'fr', 'name' => 'French'],
            ['code' => 'en', 'name' => 'English'],
            ['code' => 'es', 'name' => 'Spanish'],
            ['code' => 'de', 'name' => 'German'],
            ['code' => 'it', 'name' => 'Italian'],
        ];

        foreach ($languagesList as $languageInfo) {
            $dialect = new Language();
            $dialect->setCode(code: $languageInfo['code']);
            $dialect->setNom(nom: $languageInfo['name']);
            $manager->persist(object: $dialect);
            $languages[] = $dialect;
        }
    }

    protected function createSeasons(ObjectManager $manager, Serie $media): void
    {
        for ($j = 0; $j < random_int(min: 1, max: self::MAX_SEASONS); $j++) {
            $chapter = new Season();
            $chapter->setNumber(number: 'Chapitre ' . ($j + 1));
            $chapter->setSerie(serie: $media);

            $manager->persist(object: $chapter);
            $this->createEpisodes(season: $chapter, manager: $manager);
        }
    }

    protected function createEpisodes(Season $season, ObjectManager $manager): void
    {
        for ($k = 0; $k < random_int(min: 1, max: self::MAX_EPISODES); $k++) {
            $scene = new Episode();
            $scene->setTitle(title: 'Scène ' . ($k + 1));
            $scene->setDuration(duration: random_int(min: 10, max: 60));
            $scene->setReleasedAt(releasedAt: new DateTimeImmutable());
            $scene->setSeason(season: $season);

            $manager->persist(object: $scene);
        }
    }

    protected function createComments(ObjectManager $manager, array $medias, array $users): void
    {
        /** @var Media $item */
        foreach ($medias as $item) {
            for ($l = 0; $l < random_int(min: 1, max: self::MAX_COMMENTS_PER_MEDIA); $l++) {
                $feedback = new Comment();
                $feedback->setPublisher($users[array_rand(array: $users)]);
                $feedback->setContent(content: "Avis utilisateur $l");
                $feedback->setStatus(status: random_int(min: 0, max: 1) === 1 ? CommentStatusEnum::VALIDATED : CommentStatusEnum::PENDING);
                $feedback->setMedia($item);

                $hasParent = random_int(0, 5) < 2;
                if ($hasParent) {
                    $parentFeedback = new Comment();
                    $parentFeedback->setPublisher($users[array_rand(array: $users)]);
                    $parentFeedback->setContent(content: "Avis parent");
                    $parentFeedback->setStatus(status: random_int(min: 0, max: 1) === 1 ? CommentStatusEnum::VALIDATED : CommentStatusEnum::PENDING);
                    $parentFeedback->setMedia($item);
                    $feedback->setParentComment($parentFeedback);
                    $manager->persist(object: $parentFeedback);
                }

                $manager->persist(object: $feedback);
            }
        }
    }

    protected function linkMediaToCategories(array $items, array $groups): void
    {
        /** @var Media $item */
        foreach ($items as $item) {
            for ($j = 0; $j < random_int(min: 1, max: self::MAX_CATEGORY_PER_MEDIA); $j++) {
                $item->addCategory(category: $groups[array_rand(array: $groups)]);
            }
        }
    }

    protected function linkMediaToLanguages(array $items, array $languages): void
    {
        /** @var Media $item */
        foreach ($items as $item) {
            for ($j = 0; $j < random_int(min: 1, max: self::MAX_LANGUAGE_PER_MEDIA); $j++) {
                $item->addLanguage(language: $languages[array_rand(array: $languages)]);
            }
        }
    }

    protected function linkMediaToPlaylists(array $items, array $lists, ObjectManager $manager): void
    {
        /** @var Media $item */
        foreach ($items as $item) {
            for ($k = 0; $k < random_int(min: 1, max: self::MAX_MEDIA_PER_PLAYLIST); $k++) {
                $playlistMedia = new PlaylistMedia();
                $playlistMedia->setMedia(media: $item);
                $playlistMedia->setAddedAt(addedAt: new DateTimeImmutable());
                $playlistMedia->setPlaylist(playlist: $lists[array_rand(array: $lists)]);
                $manager->persist(object: $playlistMedia);
            }
        }
    }

    protected function linkSubscriptionToUsers(array $users, array $plans, ObjectManager $manager): void
    {
        foreach ($users as $user) {
            $plan = $plans[array_rand(array: $plans)];

            for ($l = 0; $l < random_int(min: 1, max: self::MAX_SUBSCRIPTIONS_HISTORY_PER_USER); $l++) {
                $history = new SubscriptionHistory();
                $history->setSubscriber(subscriber: $user);
                $history->setSubscription(subscription: $plan);
                $history->setStartAt(startAt: new DateTimeImmutable());
                $history->setEndAt(endAt: new DateTimeImmutable());
                $manager->persist(object: $history);
            }
        }
    }

    protected function addTeamAndCast(Media $media): void
    {
        $teamData = [
            ['name' => 'Lucas Green', 'role' => 'Director', 'image' => 'https://i.pravatar.cc/500/150?u=Lucas+Green'],
            ['name' => 'Olivia Black', 'role' => 'Screenwriter', 'image' => 'https://i.pravatar.cc/500/150?u=Olivia+Black'],
            ['name' => 'Sebastian Grey', 'role' => 'Composer', 'image' => 'https://i.pravatar.cc/500/150?u=Sebastian+Grey'],
            ['name' => 'Isabelle White', 'role' => 'Producer', 'image' => 'https://i.pravatar.cc/500/150?u=Isabelle+White'],
            ['name' => 'Matthew King', 'role' => 'Cinematographer', 'image' => 'https://i.pravatar.cc/500/150?u=Matthew+King'],
            ['name' => 'Lily Rose', 'role' => 'Editor', 'image' => 'https://i.pravatar.cc/500/150?u=Lily+Rose'],
            ['name' => 'Mason Clark', 'role' => 'Costumer', 'image' => 'https://i.pravatar.cc/500/150?u=Mason+Clark'],
            ['name' => 'Emma Scott', 'role' => 'Make-up Artist', 'image' => 'https://i.pravatar.cc/500/150?u=Emma+Scott'],
            ['name' => 'Noah Adams', 'role' => 'Stunt Coordinator', 'image' => 'https://i.pravatar.cc/500/150?u=Noah+Adams'],
        ];

        $team = [];
        for ($i = 0; $i < random_int(min: 2, max: 5); $i++) {
            $team[] = $teamData[array_rand(array: $teamData)];
        }

        $media->setStaff(staff: $team);

        $castingData = [
            ['name' => 'Zoe Morgan', 'role' => 'Actor', 'image' => 'https://i.pravatar.cc/150?u=Zoe+Morgan'],
            ['name' => 'Ethan Price', 'role' => 'Actor', 'image' => 'https://i.pravatar.cc/150?u=Ethan+Price'],
            ['name' => 'Grace Lee', 'role' => 'Actor', 'image' => 'https://i.pravatar.cc/150?u=Grace+Lee'],
            ['name' => 'Jack Turner', 'role' => 'Actor', 'image' => 'https://i.pravatar.cc/150?u=Jack+Turner'],
            ['name' => 'Maya Carter', 'role' => 'Actor', 'image' => 'https://i.pravatar.cc/150?u=Maya+Carter'],
            ['name' => 'James Miller', 'role' => 'Actor', 'image' => 'https://i.pravatar.cc/150?u=James+Miller'],
            ['name' => 'Sophia Davis', 'role' => 'Actor', 'image' => 'https://i.pravatar.cc/150?u=Sophia+Davis'],
            ['name' => 'Lucas Hernandez', 'role' => 'Actor', 'image' => 'https://i.pravatar.cc/150?u=Lucas+Hernandez'],
            ['name' => 'Amelia Evans', 'role' => 'Actor', 'image' => 'https://i.pravatar.cc/150?u=Amelia+Evans'],
        ];

        $casting = [];
        for ($i = 0; $i < random_int(min: 3, max: 5); $i++) {
            $casting[] = $castingData[array_rand(array: $castingData)];
        }

        $media->setCasting(casting: $casting);
    }

    protected function addUserPlaylistSubscriptions(ObjectManager $manager, array $users, array $playlists): void
    {
        /** @var User $user */
        foreach ($users as $user) {
            for ($i = 0; $i < random_int(min: 0, max: self::MAX_PLAYLIST_SUBSCRIPTION_PER_USERS); $i++) {
                $subscription = new PlaylistSubscription();
                $subscription->setSubscriber(subscriber: $user);
                $subscription->setPlaylist(playlist: $playlists[array_rand(array: $playlists)]);
                $subscription->setSubscribedAt(subscribedAt: new DateTimeImmutable());
                $manager->persist(object: $subscription);
            }
        }
    }





}
