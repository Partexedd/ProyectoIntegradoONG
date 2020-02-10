<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contactar;
use Symfony\Component\HttpFoundation\Request;
use App\Form\EnvioContactoType;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="index")
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
    public function contacto(Request $request)
    {
        $contactoTo=new Contactar();
        $form=$this->CreateForm(EnvioContactoType::Class, $contactoTo);

        $form->handleRequest($request); 
        if($form->isSubmitted() && $form->isValid()){
            $entityManager=$this->getDoctrine()->getManager();
            $contactoTo->setFecha(new \DateTime('now'));
            $entityManager->persist($contactoTo);
            $entityManager->flush();}
        return $this->render('main/contacto.html.twig', [
            'form' => $form->CreateView()
        ]);

    }

    /**
     * @Route("/mirant", name="mirant")
     */
    public function mirant()
    {
        return $this->render('main/mirant.html.twig', [
        ]);
    }

    /**
     * @Route("/jornadasFormativas", name="jornadasFormativas")
     */
    public function jornadas()
    {
        return $this->render('main/jornadas.html.twig', [

        ]);
    }
    
    /**
     * @Route("/entidades", name="entidades")
     */
    public function entidades()
    {
        return $this->render('main/entidades.html.twig', [
        ]);
    }

    /**
     * @Route("/formaParte", name="formaParte")
     */
    public function formaParte()
    {
        return $this->render('main/forma_parte.html.twig', [
        ]);
    }
}
