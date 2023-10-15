<?php

namespace App\Controller;

use Doctrine\Migrations\Provider\Exception\NoMappingFound;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Test3Controller extends AbstractController
{
    #[Route('/test3', name: 'app_test3')]
    public function index(): Response
    {
        return $this->render('test3/index.html.twig', [
            'controller_name' => 'Test3Controller',
            // //write i simple msg
            'msg' => 'Hello World',
        ]);
    }

    #[Route('/ttt/{name}', name: 'app_test3_name')]
    public function msgesprit($name): Response
    {
        return $this->render('test3/msg.html.twig', [
            'controller_name' => 'Test3Controller',
            'n' => nom,
        ]);
    }

    #[Route('/details', name: 'app_test3')]
    public function detailsAuthor(): Response
    {
        return $this->render('test3/msg.html.twig', [
            
        ]);
    }

}
