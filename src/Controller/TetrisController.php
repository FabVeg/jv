<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TetrisController extends AbstractController
{
    /**
     * @Route("/tetris", name="tetris")
     */
    public function index(): Response
    {
        return $this->render('tetris/index.html.twig', [
            'controller_name' => 'TetrisController',
        ]);
    }
}
