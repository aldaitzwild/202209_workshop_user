<?php

namespace App\Controller;

class UserController extends AbstractController
{
    public function login()
    {
        return $this->twig->render('User/login.html.twig');
    }

    public function logout()
    {
    }

    public function register()
    {
        return $this->twig->render('User/register.html.twig');
    }

    public function userAccount()
    {
        return $this->twig->render('User/user-account.html.twig');
    }
}
