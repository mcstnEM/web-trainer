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
            [
                'name' => 'Alice Johnson',
                'address' => '123 Oak Street',
                'phone' => '555-1111',
                'star' => 4
            ],
            [
                'name' => 'Bob Smith',
                'address' => '456 Pine Avenue',
                'phone' => '555-2222',
                'star' => 5
            ],
            [
                'name' => 'Charlie Davis',
                'address' => '789 Maple Lane',
                'phone' => '555-3333',
                'star' => 3
            ],
            [
                'name' => 'David Wilson',
                'address' => '234 Cedar Road',
                'phone' => '555-4444',
                'star' => 4
            ],
            [
                'name' => 'Eva Martin',
                'address' => '567 Birch Boulevard',
                'phone' => '555-5555',
                'star' => 5
            ],
            [
                'name' => 'Frank Miller',
                'address' => '890 Walnut Drive',
                'phone' => '555-6666',
                'star' => 3
            ],
            [
                'name' => 'Grace Turner',
                'address' => '345 Sycamore Street',
                'phone' => '555-7777',
                'star' => 4
            ],
            [
                'name' => 'Henry Harris',
                'address' => '678 Redwood Avenue',
                'phone' => '555-8888',
                'star' => 5
            ],
            [
                'name' => 'Ivy White',
                'address' => '901 Pine Lane',
                'phone' => '555-9999',
                'star' => 3
            ],
            [
                'name' => 'Jack Turner',
                'address' => '123 Elm Road',
                'phone' => '555-0000',
                'star' => 4
            ],
        ];
        return $this->render('trainers/index.html.twig', [
            'trainers' => $trainers,
        ]);
    }
}
