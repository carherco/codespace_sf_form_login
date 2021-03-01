<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrivateController extends AbstractController
{
    /**
     * @Route("/private", name="private")
     */
    public function index(): Response
    {
        $user = $this->getUser();
        return $this->render('private/index.html.twig', [
            'user' => $user
        ]);
    }

    /**
     * @Route("/profile", name="private_profile")
     */
    public function profile(): Response
    {
        $user = $this->getUser();
        return $this->render('private/index.html.twig', [
            'user' => $user
        ]);
    }
}
