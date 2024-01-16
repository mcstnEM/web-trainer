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
                'star' => 4,
                'rates' => [11, 18, 10, 7 ]
            ],
            [
                'name' => 'Bob Smith',
                'address' => '456 Pine Avenue',
                'phone' => '555-2222',
                'star' => 25,
                'rates' => [13, 10, 7, 7.5, 19, 20, 17 ]
            ],
            [
                'name' => 'Charlie Davis',
                'address' => '789 Maple Lane',
                'phone' => '555-3333',
                'star' => 1
            ],
            [
                'name' => 'David Wilson',
                'address' => '234 Cedar Road',
                'phone' => '555-4444',
                'star' => 40
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
                'star' => 7
            ],
            [
                'name' => 'Grace Turner',
                'address' => '345 Sycamore Street',
                'phone' => '555-7777',
                'star' => 14,
                'rates' => [1, 9, 5, 9, 10, 20, 20 ]
            ],
            [
                'name' => 'Henry Harris',
                'address' => '678 Redwood Avenue',
                'phone' => '555-8888',
                'star' => 15
            ],
            [
                'name' => 'Ivy White',
                'address' => '901 Pine Lane',
                'phone' => '555-9999',
                'star' => 8
            ],
            [
                'name' => 'Jack Turner',
                'address' => '123 Elm Road',
                'phone' => '555-0000',
                'star' => 2
            ],
        ];

        // On verra prochainement comment créer des extensions dans twig, qui nous permettrons de libérer le controller de cette tache, et d'afficher directement la moyenne dans twig.
        // Ajout de la clé 'average' pour les elements comportants des notes 'rates'.
        $trainers= array_map(function($trainer){
            $s = 0;
            if( !empty($trainer['rates'])){
                $s = array_sum($trainer['rates']) / count($trainer['rates']) ;
                $trainer['average'] = round($s, 2);
            }
            return $trainer;
        }, $trainers);

        // Réorganisation de notre array en fonction de 'star' (ordre décroissant).
        usort($trainers, function($a,$b) {
            if($a['star'] == $b['star']) return 0;
            return $a['star'] < $b['star'] ? 1 : -1;
        });

        // la fonction dump() est fourni par symfony.
        // dump($trainers); // lien vers le repos Packagist : https://packagist.org/packages/symfony/var-dumper
        
        return $this->render('trainers/index.html.twig', [
            'trainers' => $trainers,
        ]);
    }
}
