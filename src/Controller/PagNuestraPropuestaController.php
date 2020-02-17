<?php

namespace App\Controller;

use App\Entity\PagNuestraPropuesta;
use App\Form\PagNuestraPropuestaType;
use App\Repository\PagNuestraPropuestaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/pag/nuestra/propuesta")
 */
class PagNuestraPropuestaController extends AbstractController
{
    /**
     * @Route("/", name="pag_nuestra_propuesta_index", methods={"GET"})
     */
    public function index(PagNuestraPropuestaRepository $pagNuestraPropuestaRepository): Response
    {
        return $this->render('pag_nuestra_propuesta/index.html.twig', [
            'pag_nuestra_propuestas' => $pagNuestraPropuestaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="pag_nuestra_propuesta_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
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
        ]);
    }

    /**
     * @Route("/{id}", name="pag_nuestra_propuesta_show", methods={"GET"})
     */
    public function show(PagNuestraPropuesta $pagNuestraPropuestum): Response
    {
        return $this->render('pag_nuestra_propuesta/show.html.twig', [
            'pag_nuestra_propuestum' => $pagNuestraPropuestum,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pag_nuestra_propuesta_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PagNuestraPropuesta $pagNuestraPropuestum): Response
    {
        $form = $this->createForm(PagNuestraPropuestaType::class, $pagNuestraPropuestum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pag_nuestra_propuesta_index');
        }

        return $this->render('pag_nuestra_propuesta/edit.html.twig', [
            'pag_nuestra_propuestum' => $pagNuestraPropuestum,
            'form' => $form->createView(),
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
