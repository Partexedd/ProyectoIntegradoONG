<?php

namespace App\Controller;

use App\Entity\Entidades;
use App\Form\EntidadesType;
use App\Repository\EntidadesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
/**
 * @Route("/entidades")
 */
class EntidadesController extends AbstractController
{
    /**
     * @Route("/", name="entidades_index", methods={"GET"})
     */
    public function index(EntidadesRepository $entidadesRepository, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        return $this->render('entidades/index.html.twig', [
            'entidades' => $entidadesRepository->findAll(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/new", name="entidades_new", methods={"GET","POST"})
     */
    public function new(Request $request, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        $entidade = new Entidades();
        $form = $this->createForm(EntidadesType::class, $entidade);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($entidade);
            $entityManager->flush();

            return $this->redirectToRoute('entidades_index');
        }

        return $this->render('entidades/new.html.twig', [
            'entidade' => $entidade,
            'form' => $form->createView(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}", name="entidades_show", methods={"GET"})
     */
    public function show(Entidades $entidade, SessionInterface $session): Response
    {
        return $this->render('entidades/show.html.twig', [
            'entidade' => $entidade,
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="entidades_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Entidades $entidade, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        $form = $this->createForm(EntidadesType::class, $entidade);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('entidades_index');
        }

        return $this->render('entidades/edit.html.twig', [
            'entidade' => $entidade,
            'form' => $form->createView(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}", name="entidades_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Entidades $entidade): Response
    {
        if ($this->isCsrfTokenValid('delete'.$entidade->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($entidade);
            $entityManager->flush();
        }

        return $this->redirectToRoute('entidades_index');
    }
}
