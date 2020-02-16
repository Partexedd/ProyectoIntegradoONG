<?php

namespace App\Controller;

use App\Entity\PagJornadas;
use App\Form\PagJornadasType;
use App\Repository\PagJornadasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
/**
 * @Route("/pag/jornadas")
 */
class PagJornadasController extends AbstractController
{
    /**
     * @Route("/", name="pag_jornadas_index", methods={"GET"})
     */

    public function index(PagJornadasRepository $pagJornadasRepository, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        return $this->render('pag_jornadas/index.html.twig', [
            'pag_jornadas' => $pagJornadasRepository->findAll(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/new", name="pag_jornadas_new", methods={"GET","POST"})
     */
    public function new(Request $request, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
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
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}", name="pag_jornadas_show", methods={"GET"})
     */
    public function show(PagJornadas $pagJornada, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        return $this->render('pag_jornadas/show.html.twig', [
            'pag_jornada' => $pagJornada,
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pag_jornadas_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PagJornadas $pagJornada, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        $form = $this->createForm(PagJornadasType::class, $pagJornada);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pag_jornadas_index');
        }

        return $this->render('pag_jornadas/edit.html.twig', [
            'pag_jornada' => $pagJornada,
            'form' => $form->createView(),
            'user' => $user1,
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
