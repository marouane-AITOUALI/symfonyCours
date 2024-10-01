<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    
    #[Route(path: '/hello', name: 'page_hello')]
    public function accueil()
    {
        return $this->render('index.html.twig');
    }
}
?>