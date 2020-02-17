<?php

namespace App\Controller;

use App\Entity\PagFormaParte;
use App\Form\PagFormaParteType;
use App\Repository\PagFormaParteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/pag/forma/parte")
 */
class PagFormaParteController extends AbstractController
{
    /**
     * @Route("/", name="pag_forma_parte_index", methods={"GET"})
     */
    public function index(PagFormaParteRepository $pagFormaParteRepository): Response
    {
        return $this->render('pag_forma_parte/index.html.twig', [
            'pag_forma_partes' => $pagFormaParteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="pag_forma_parte_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $pagFormaParte = new PagFormaParte();
        $form = $this->createForm(PagFormaParteType::class, $pagFormaParte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pagFormaParte);
            $entityManager->flush();

            return $this->redirectToRoute('pag_forma_parte_index');
        }

        return $this->render('pag_forma_parte/new.html.twig', [
            'pag_forma_parte' => $pagFormaParte,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pag_forma_parte_show", methods={"GET"})
     */
    public function show(PagFormaParte $pagFormaParte): Response
    {
        return $this->render('pag_forma_parte/show.html.twig', [
            'pag_forma_parte' => $pagFormaParte,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pag_forma_parte_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PagFormaParte $pagFormaParte): Response
    {
        $form = $this->createForm(PagFormaParteType::class, $pagFormaParte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pag_forma_parte_index');
        }

        return $this->render('pag_forma_parte/edit.html.twig', [
            'pag_forma_parte' => $pagFormaParte,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pag_forma_parte_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PagFormaParte $pagFormaParte): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pagFormaParte->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pagFormaParte);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pag_forma_parte_index');
    }
}
