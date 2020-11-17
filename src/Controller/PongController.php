<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PongController extends AbstractController
{
    /**
     * @Route("/pong", name="pong")
     */
    public function index(): Response
    {
        return $this->render('pong/index.html.twig', [
            'controller_name' => 'PongController',
        ]);
    }
}
