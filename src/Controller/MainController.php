<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{   
    #[Route('/', name: 'app_default')]
    public function def(): Response
    {
        return $this->render('main/pages/main.html.twig', [
            
        ]);
    }

    #[Route('/main', name: 'app_main')]
    public function index(): Response
    {
        return $this->render('main/pages/main.html.twig', [
            
        ]);
    }
    #[Route('/profil', name: 'app_profil')]
    public function profil(): Response
        {
            return $this->render('main/pages/main_profil.html.twig', [
                
            ]);
    }
}
