<?php

namespace App\Controller;

use App\Entity\PagContacto;
use App\Form\PagContactoType;
use App\Repository\PagContactoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
/**
 * @Route("/pag/contacto")
 */
class PagContactoController extends AbstractController
{
    /**
     * @Route("/", name="pag_contacto_index", methods={"GET"})
     */
    public function index(PagContactoRepository $pagContactoRepository, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        return $this->render('pag_contacto/index.html.twig', [
            'pag_contactos' => $pagContactoRepository->findAll(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/new", name="pag_contacto_new", methods={"GET","POST"})
     */
    public function new(Request $request, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        $pagContacto = new PagContacto();
        $form = $this->createForm(PagContactoType::class, $pagContacto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pagContacto);
            $entityManager->flush();

            return $this->redirectToRoute('pag_contacto_index');
        }

        return $this->render('pag_contacto/new.html.twig', [
            'pag_contacto' => $pagContacto,
            'form' => $form->createView(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}", name="pag_contacto_show", methods={"GET"})
     */
    public function show(PagContacto $pagContacto, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        return $this->render('pag_contacto/show.html.twig', [
            'pag_contacto' => $pagContacto,
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pag_contacto_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PagContacto $pagContacto, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        $form = $this->createForm(PagContactoType::class, $pagContacto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pag_contacto_index');
        }

        return $this->render('pag_contacto/edit.html.twig', [
            'pag_contacto' => $pagContacto,
            'form' => $form->createView(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}", name="pag_contacto_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PagContacto $pagContacto): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pagContacto->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pagContacto);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pag_contacto_index');
    }
}
