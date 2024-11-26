<?php

declare(strict_types=1);

namespace App\Controller\Movie;

use App\Entity\Playlist;
use App\Entity\PlaylistSubscription;
use App\Repository\PlaylistRepository;
use App\Repository\PlaylistSubscriptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListController extends AbstractController
{
    #[Route('/lists', name: 'page_lists')]
    public function index(
        PlaylistRepository $playlistRepository,
        PlaylistSubscriptionRepository $playlistSubscriptionRepository,
    ): Response
    {
        $myPlaylists = $playlistRepository->findAll();  // Ceci doit être une collection d'objets Playlist
        $mySubscriptionPlaylists = $playlistSubscriptionRepository->findAll();  // Ceci doit être une collection d'objets PlaylistSubscription
        return $this->render('movie/lists.html.twig', [
            'myPlaylists' => $myPlaylists,
            'mySubscriptionPlaylists' => $mySubscriptionPlaylists,
        ]);
    }
}
