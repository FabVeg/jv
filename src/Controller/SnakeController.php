<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SnakeController extends AbstractController
{
    /**
     * @Route("/snake", name="snake")
     */
    public function index(): Response
    {
        return $this->render('snake/index.html.twig', [
            'controller_name' => 'SnakeController',
        ]);
    }
}
