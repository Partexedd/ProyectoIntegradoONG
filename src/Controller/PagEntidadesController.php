<?php

namespace App\Controller;

use App\Entity\PagEntidades;
use App\Form\PagEntidadesType;
use App\Repository\PagEntidadesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
/**
 * @Route("/pag/entidades")
 */
class PagEntidadesController extends AbstractController
{
    /**
     * @Route("/", name="pag_entidades_index", methods={"GET"})
     */
    public function index(PagEntidadesRepository $pagEntidadesRepository, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');

        return $this->render('pag_entidades/index.html.twig', [
            'pag_entidades' => $pagEntidadesRepository->findAll(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/new", name="pag_entidades_new", methods={"GET","POST"})
     */
    public function new(Request $request, SessionInterface $session): Response
    {
        $pagEntidade = new PagEntidades();
        $form = $this->createForm(PagEntidadesType::class, $pagEntidade);
        $form->handleRequest($request);
        $user1 = $session->get('nombre_usuario');
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pagEntidade);
            $entityManager->flush();

            return $this->redirectToRoute('pag_entidades_index');
        }

        return $this->render('pag_entidades/new.html.twig', [
            'pag_entidade' => $pagEntidade,
            'form' => $form->createView(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}", name="pag_entidades_show", methods={"GET"})
     */
    public function show(PagEntidades $pagEntidade, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        return $this->render('pag_entidades/show.html.twig', [
            'pag_entidade' => $pagEntidade,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pag_entidades_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PagEntidades $pagEntidade, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        $form = $this->createForm(PagEntidadesType::class, $pagEntidade);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pag_entidades_index');
        }

        return $this->render('pag_entidades/edit.html.twig', [
            'pag_entidade' => $pagEntidade,
            'form' => $form->createView(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}", name="pag_entidades_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PagEntidades $pagEntidade, SessionInterface $session): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pagEntidade->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pagEntidade);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pag_entidades_index');
    }
}
