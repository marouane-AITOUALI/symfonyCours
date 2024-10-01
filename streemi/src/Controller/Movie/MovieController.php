<?php

namespace App\Controller\Movie;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
    #[Route(path: '/discover', name: 'discover')]
    public function index()
    {
        return $this->render('movie/discover.html.twig');
    }
    
    #[Route(path: '/movie/show', name: 'movie_show')]
    public function show()
    {
        return $this->render('movie/show.html.twig');
    }

    #[Route(path: '/movie/create', name: 'movie_create')]
    public function create()
    {
        return $this->render('movie/create.html.twig');
    }

    public function edit()
    {
        return $this->render('movie/edit.html.twig');
    }

    public function delete()
    {
        return $this->render('movie/delete.html.twig');
    }
}


?>