<?php

namespace App\Controller;

use App\Entity\Contactar;
use App\Form\ContactarType;
use App\Repository\ContactarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Bundle\FrameworkBundle\Controller\MainController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * @Route("/contactar")
 */
class ContactarController extends AbstractController
{
    /**
     * @Route("/", name="contactar_index", methods={"GET"})
     */
    public function index(ContactarRepository $contactarRepository, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        return $this->render('contactar/index.html.twig', [
            'contactars' => $contactarRepository->findAll(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/new", name="contactar_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $contactar = new Contactar();
        $form = $this->createForm(ContactarType::class, $contactar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contactar);
            $entityManager->flush();

            return $this->redirectToRoute('contactar_index');
        }

        return $this->render('contactar/new.html.twig', [
            'contactar' => $contactar,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="contactar_show", methods={"GET"})
     */
    public function show(Contactar $contactar): Response
    {
        return $this->render('contactar/show.html.twig', [
            'contactar' => $contactar,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="contactar_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Contactar $contactar): Response
    {
        $form = $this->createForm(ContactarType::class, $contactar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contactar_index');
        }

        return $this->render('contactar/edit.html.twig', [
            'contactar' => $contactanmr,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="contactar_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Contactar $contactar): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contactar->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($contactar);
            $entityManager->flush();
        }

        return $this->redirectToRoute('contactar_index');
    }
}
