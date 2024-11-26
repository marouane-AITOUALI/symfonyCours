<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\MediaRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    public function __construct(
    )
    {
    }

    #[Route(path: '/', name: 'page_homepage')]
    public function home(
        MediaRepository $mediaRepository,
    ): Response
    {
        // Appeler la méthode findPopular pour récupérer les médias populaires
        $popularMedia = $mediaRepository->findPopular(8); // Limite à 8 résultats par exemple

        // Passer les résultats à la vue
        return $this->render('index.html.twig', [
            'popularMedia' => $popularMedia,
        ]);
    }
}
