<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BreakoutController extends AbstractController
{
    /**
     * @Route("/breakout", name="breakout")
     */
    public function index(): Response
    {
        return $this->render('breakout/index.html.twig', [
            'controller_name' => 'BreakoutController',
        ]);
    }
}
