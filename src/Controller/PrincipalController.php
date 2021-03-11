<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrincipalController extends AbstractController
{

    //Router pour la page home
    /**
     * @Route("/index", name="index")
     */
    public function index(): Response
    {
        return $this->render('principal/index.html.twig', [
            'controller_name' => 'PrincipalController',
        ]);
    }
    /**
     * @Route("/Footer", name="footer")
     */
    public function contact(): Response
    {
        return $this->render('principal/Footer.html.twig', [
            'controller_name' => 'PrincipalController',
        ]);
    }
}
