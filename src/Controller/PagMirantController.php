<?php

namespace App\Controller;

use App\Entity\PagMirant;
use App\Form\PagMirantType;
use App\Repository\PagMirantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
/**
 * @Route("/pag/mirant")
 */
class PagMirantController extends AbstractController
{
    /**
     * @Route("/", name="pag_mirant_index", methods={"GET"})
     */
    public function index(PagMirantRepository $pagMirantRepository, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        $Mirant=$this->getDoctrine()->getRepository(PagMirant::Class)->findAll();
        return $this->render('pag_mirant/index.html.twig', [
            'pag_mirants' => $pagMirantRepository->findAll(),
            'EdicionMirant' => $Mirant, 
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/new", name="pag_mirant_new", methods={"GET","POST"})
     */
    public function new(Request $request, SessionInterface $session): Response
    {
        $pagMirant = new PagMirant();
        $form = $this->createForm(PagMirantType::class, $pagMirant);
        $form->handleRequest($request);
        $user1 = $session->get('nombre_usuario');
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pagMirant);
            $entityManager->flush();

            return $this->redirectToRoute('pag_mirant_index');
        }

        return $this->render('pag_mirant/new.html.twig', [
            'pag_mirant' => $pagMirant,
            'form' => $form->createView(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}", name="pag_mirant_show", methods={"GET"})
     */
    public function show(PagMirant $pagMirant, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        return $this->render('pag_mirant/show.html.twig', [
            'pag_mirant' => $pagMirant,
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pag_mirant_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PagMirant $pagMirant, SessionInterface $session): Response
    {
        $form = $this->createForm(PagMirantType::class, $pagMirant);
        $form->handleRequest($request);
        $user1 = $session->get('nombre_usuario');
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pag_mirant_index');
        }

        return $this->render('pag_mirant/edit.html.twig', [
            'pag_mirant' => $pagMirant,
            'form' => $form->createView(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}", name="pag_mirant_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PagMirant $pagMirant, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        if ($this->isCsrfTokenValid('delete'.$pagMirant->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pagMirant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pag_mirant_index');
    }
}
