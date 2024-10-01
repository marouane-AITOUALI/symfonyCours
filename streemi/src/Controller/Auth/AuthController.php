<?php

namespace App\Controller\Auth;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuthController extends AbstractController
{
    #[Route(path: '/login', name: 'login')]
    public function login()
    {
        return $this->render('auth/login.html.twig');
    }

    #[Route(path: '/register', name: 'register')]
    public function register()
    {
        return $this->render('auth/register.html.twig');
    }

    #[Route(path: '/forgot', name: 'forgot')]
    public function forgotPassword()
    {
        return $this->render('auth/forgot.html.twig');
    }

    #[Route(path: '/reset', name: 'reset')]
    public function resetPassword()
    {
        return $this->render('reset.html.twig');
    }
}
