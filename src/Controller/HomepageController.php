<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {
        // render retoiurne la PAGE:  homepage / index
        return $this->render(
            'homepage/index.html.twig', 
            ['controller_name' => 'HomepageController',]
        );
    }
}
