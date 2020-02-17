<?php

namespace App\Controller;

use App\Entity\PagNuestraPropuesta;
use App\Form\PagNuestraPropuestaType;
use App\Repository\PagNuestraPropuestaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
/**
 * @Route("/pag/nuestra/propuesta")
 */
class PagNuestraPropuestaController extends AbstractController
{
    /**
     * @Route("/", name="pag_nuestra_propuesta_index", methods={"GET"})
     */
    public function index(PagNuestraPropuestaRepository $pagNuestraPropuestaRepository, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        return $this->render('pag_nuestra_propuesta/index.html.twig', [
            'pag_nuestra_propuestas' => $pagNuestraPropuestaRepository->findAll(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/new", name="pag_nuestra_propuesta_new", methods={"GET","POST"})
     */
    public function new(Request $request, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        $pagNuestraPropuestum = new PagNuestraPropuesta();
        $form = $this->createForm(PagNuestraPropuestaType::class, $pagNuestraPropuestum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pagNuestraPropuestum);
            $entityManager->flush();

            return $this->redirectToRoute('pag_nuestra_propuesta_index');
        }

        return $this->render('pag_nuestra_propuesta/new.html.twig', [
            'pag_nuestra_propuestum' => $pagNuestraPropuestum,
            'form' => $form->createView(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}", name="pag_nuestra_propuesta_show", methods={"GET"})
     */
    public function show(PagNuestraPropuesta $pagNuestraPropuestum, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        return $this->render('pag_nuestra_propuesta/show.html.twig', [
            'pag_nuestra_propuestum' => $pagNuestraPropuestum,
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pag_nuestra_propuesta_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PagNuestraPropuesta $pagNuestraPropuestum, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        $form = $this->createForm(PagNuestraPropuestaType::class, $pagNuestraPropuestum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pag_nuestra_propuesta_index');
        }

        return $this->render('pag_nuestra_propuesta/edit.html.twig', [
            'pag_nuestra_propuestum' => $pagNuestraPropuestum,
            'form' => $form->createView(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}", name="pag_nuestra_propuesta_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PagNuestraPropuesta $pagNuestraPropuestum): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pagNuestraPropuestum->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pagNuestraPropuestum);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pag_nuestra_propuesta_index');
    }
}
