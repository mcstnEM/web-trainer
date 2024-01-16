<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrainersController extends AbstractController
{
    #[Route('/trainers', name: 'app_trainers')]
    public function index(): Response
    {
        $trainers = [
            ['name' => 'Bob'],
            ['name' => 'Alan'],
            ['name' => 'John'],
            ['name' => 'Alice'],
        ];
        return $this->render('trainers/index.html.twig', [
            'trainers' => $trainers,
        ]);
    }
}
