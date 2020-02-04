<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

       /**
     * @Route("/nuestraPropuesta", name="nuestraPropuesta")
     */
    public function nuestraPropuesta()
    {
        return $this->render('main/nuestrapropuesta.html.twig', [
        ]);
    }

    /**
     * @Route("/contacto", name="contacto")
     */
    public function contacto()
    {
        return $this->render('main/contacto.html.twig', [
        ]);
    }
}
