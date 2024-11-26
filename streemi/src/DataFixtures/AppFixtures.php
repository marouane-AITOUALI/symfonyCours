<?php

namespace App\DataFixtures;

use App\Entity\Media;
use App\Entity\Movie;
use App\Entity\Playlist;
use App\Entity\PlaylistMedia;
use App\Entity\Serie;
use App\Entity\Subscription;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Enum\UserAccountStatusEnum;

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

        $this->linkMediaToPlaylists(medias: $medias, playlists: $playlists, manager: $manager);
        $this->linkSubscriptionToUsers(users: $users, subscriptions: $subscriptions, manager: $manager);
        $this->linkMediaToCategories(medias: $medias, categories: $categories);
        $this->linkMediaToLanguages(medias: $medias, languages: $languages);
        $this->addUserPlaylistSubscriptions(manager: $manager, users: $users, playlists: $playlists);

        $manager->flush();
    }

    protected function createUsers(ObjectManager $manager, array &$users): void
    {
        for ($i = 0; $i < self::MAX_USERS; $i++) {
            $profile = new User();
            $profile->setEmail(email: "user_$i@sample.com");
            $profile->setUsername(username: "profile_$i");
            $profile->setPassword(password: 'securepass');
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

            $this->addCastingAndStaff(media: $content);

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






}
