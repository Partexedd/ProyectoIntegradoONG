<?php

namespace App\Controller;

use App\Entity\PagJornadas;
use App\Form\PagJornadasType;
use App\Repository\PagJornadasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/pag/jornadas")
 */
class PagJornadasController extends AbstractController
{
    /**
     * @Route("/", name="pag_jornadas_index", methods={"GET"})
     */
    public function index(PagJornadasRepository $pagJornadasRepository): Response
    {
        return $this->render('pag_jornadas/index.html.twig', [
            'pag_jornadas' => $pagJornadasRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="pag_jornadas_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $pagJornada = new PagJornadas();
        $form = $this->createForm(PagJornadasType::class, $pagJornada);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pagJornada);
            $entityManager->flush();

            return $this->redirectToRoute('pag_jornadas_index');
        }

        return $this->render('pag_jornadas/new.html.twig', [
            'pag_jornada' => $pagJornada,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pag_jornadas_show", methods={"GET"})
     */
    public function show(PagJornadas $pagJornada): Response
    {
        return $this->render('pag_jornadas/show.html.twig', [
            'pag_jornada' => $pagJornada,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pag_jornadas_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PagJornadas $pagJornada): Response
    {
        $form = $this->createForm(PagJornadasType::class, $pagJornada);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pag_jornadas_index');
        }

        return $this->render('pag_jornadas/edit.html.twig', [
            'pag_jornada' => $pagJornada,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pag_jornadas_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PagJornadas $pagJornada): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pagJornada->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pagJornada);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pag_jornadas_index');
    }
}
