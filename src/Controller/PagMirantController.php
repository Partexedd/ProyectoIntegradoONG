<?php

namespace App\Controller;

use App\Entity\PagMirant;
use App\Form\PagMirantType;
use App\Repository\PagMirantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/pag/mirant")
 */
class PagMirantController extends AbstractController
{
    /**
     * @Route("/", name="pag_mirant_index", methods={"GET"})
     */
    public function index(PagMirantRepository $pagMirantRepository): Response
    {
        $Mirant=$this->getDoctrine()->getRepository(PagMirant::Class)->findAll();
        return $this->render('pag_mirant/index.html.twig', [
            'pag_mirants' => $pagMirantRepository->findAll(),
            'EdicionMirant' => $Mirant, 
        ]);
    }

    /**
     * @Route("/new", name="pag_mirant_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $pagMirant = new PagMirant();
        $form = $this->createForm(PagMirantType::class, $pagMirant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pagMirant);
            $entityManager->flush();

            return $this->redirectToRoute('pag_mirant_index');
        }

        return $this->render('pag_mirant/new.html.twig', [
            'pag_mirant' => $pagMirant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pag_mirant_show", methods={"GET"})
     */
    public function show(PagMirant $pagMirant): Response
    {
        return $this->render('pag_mirant/show.html.twig', [
            'pag_mirant' => $pagMirant,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pag_mirant_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PagMirant $pagMirant): Response
    {
        $form = $this->createForm(PagMirantType::class, $pagMirant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pag_mirant_index');
        }

        return $this->render('pag_mirant/edit.html.twig', [
            'pag_mirant' => $pagMirant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pag_mirant_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PagMirant $pagMirant): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pagMirant->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pagMirant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pag_mirant_index');
    }
}
