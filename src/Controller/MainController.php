<?php

namespace App\Controller;




use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(): Response
    {
        return $this->render('main/welcome.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/connexion', name: 'app_connexion')]
    public function connexion(): Response
    {
        return $this->render('main/connexion.html.twig');
    }

    #[Route('/pendu', name: 'app_pendu')]
    public function pagePendu(): Response
    {
        $pendu = new Pendu();
        return $this->render('main/pendu.html.twig', ["pendu" => $pendu]);
    }
    #[Route('/check', name: 'app_pendu')]
    public function checkletter(): Response
    {
        $pendu = new Pendu();

        return $this->render('main/pendu.html.twig', ["pendu" => $pendu]);
    }

}
