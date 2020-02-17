<?php

namespace App\Controller;

use App\Entity\PagInicio;
use App\Form\PagInicioType;
use App\Repository\PagInicioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
/**
 * @Route("/pag/inicio")
 */
class PagInicioController extends AbstractController
{
    /**
     * @Route("/", name="pag_inicio_index", methods={"GET"})
     */
    public function index(PagInicioRepository $pagInicioRepository, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        return $this->render('pag_inicio/index.html.twig', [
            'pag_inicios' => $pagInicioRepository->findAll(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/new", name="pag_inicio_new", methods={"GET","POST"})
     */
    public function new(Request $request, SessionInterface $session): Response
    {
        $pagInicio = new PagInicio();
        $form = $this->createForm(PagInicioType::class, $pagInicio);
        $form->handleRequest($request);
        $user1 = $session->get('nombre_usuario');
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pagInicio);
            $entityManager->flush();

            return $this->redirectToRoute('pag_inicio_index');
        }

        return $this->render('pag_inicio/new.html.twig', [
            'pag_inicio' => $pagInicio,
            'form' => $form->createView(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}", name="pag_inicio_show", methods={"GET"})
     */
    public function show(PagInicio $pagInicio, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        return $this->render('pag_inicio/show.html.twig', [
            'pag_inicio' => $pagInicio,
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pag_inicio_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PagInicio $pagInicio, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        $form = $this->createForm(PagInicioType::class, $pagInicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pag_inicio_index');
        }

        return $this->render('pag_inicio/edit.html.twig', [
            'pag_inicio' => $pagInicio,
            'form' => $form->createView(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}", name="pag_inicio_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PagInicio $pagInicio): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pagInicio->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pagInicio);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pag_inicio_index');
    }
}
