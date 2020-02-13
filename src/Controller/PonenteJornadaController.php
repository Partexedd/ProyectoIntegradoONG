<?php

namespace App\Controller;

use App\Entity\PonenteJornada;
use App\Form\PonenteJornadaType;
use App\Repository\PonenteJornadaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * @Route("/ponente/jornada")
 */
class PonenteJornadaController extends AbstractController
{
    /**
     * @Route("/", name="ponente_jornada_index", methods={"GET"})
     */
    public function index(PonenteJornadaRepository $ponenteJornadaRepository, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        return $this->render('ponente_jornada/index.html.twig', [
            'ponente_jornadas' => $ponenteJornadaRepository->findAll(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/new", name="ponente_jornada_new", methods={"GET","POST"})
     */
    public function new(Request $request, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        $ponenteJornada = new PonenteJornada();
        $form = $this->createForm(PonenteJornadaType::class, $ponenteJornada);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ponenteJornada);
            $entityManager->flush();

            return $this->redirectToRoute('ponente_jornada_index');
        }

        return $this->render('ponente_jornada/new.html.twig', [
            'ponente_jornada' => $ponenteJornada,
            'form' => $form->createView(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}", name="ponente_jornada_show", methods={"GET"})
     */
    public function show(PonenteJornada $ponenteJornada, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        return $this->render('ponente_jornada/show.html.twig', [
            'ponente_jornada' => $ponenteJornada,
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="ponente_jornada_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PonenteJornada $ponenteJornada, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        $form = $this->createForm(PonenteJornadaType::class, $ponenteJornada);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ponente_jornada_index');
        }

        return $this->render('ponente_jornada/edit.html.twig', [
            'ponente_jornada' => $ponenteJornada,
            'form' => $form->createView(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}", name="ponente_jornada_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PonenteJornada $ponenteJornada, SessionInterface $session): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ponenteJornada->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ponenteJornada);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ponente_jornada_index');
    }
}
