<?php

namespace App\Controller;

use App\Entity\FechasJornadas;
use App\Form\FechasJornadasType;
use App\Repository\FechasJornadasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/fechas/jornadas")
 */
class FechasJornadasController extends AbstractController
{
    /**
     * @Route("/", name="fechas_jornadas_index", methods={"GET"})
     */
    public function index(FechasJornadasRepository $fechasJornadasRepository): Response
    {
        return $this->render('fechas_jornadas/index.html.twig', [
            'fechas_jornadas' => $fechasJornadasRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="fechas_jornadas_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $fechasJornada = new FechasJornadas();
        $form = $this->createForm(FechasJornadasType::class, $fechasJornada);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($fechasJornada);
            $entityManager->flush();

            return $this->redirectToRoute('fechas_jornadas_index');
        }

        return $this->render('fechas_jornadas/new.html.twig', [
            'fechas_jornada' => $fechasJornada,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="fechas_jornadas_show", methods={"GET"})
     */
    public function show(FechasJornadas $fechasJornada): Response
    {
        return $this->render('fechas_jornadas/show.html.twig', [
            'fechas_jornada' => $fechasJornada,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="fechas_jornadas_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, FechasJornadas $fechasJornada): Response
    {
        $form = $this->createForm(FechasJornadasType::class, $fechasJornada);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fechas_jornadas_index');
        }

        return $this->render('fechas_jornadas/edit.html.twig', [
            'fechas_jornada' => $fechasJornada,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="fechas_jornadas_delete", methods={"DELETE"})
     */
    public function delete(Request $request, FechasJornadas $fechasJornada): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fechasJornada->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($fechasJornada);
            $entityManager->flush();
        }

        return $this->redirectToRoute('fechas_jornadas_index');
    }
}
