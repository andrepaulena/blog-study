<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/admin/login", name="admin-login")
     */
    public function login()
    {
        return $this->render('admin/login.twig', [
            'name' => 'Nome teste'
        ]);
    }

    /**
     * @Route("/admin/esqueci-minha-senha", name="admin-forgot-password")
     */
    public function forgotPassword()
    {
        echo "esqueci minha senha";
        exit;
    }
}