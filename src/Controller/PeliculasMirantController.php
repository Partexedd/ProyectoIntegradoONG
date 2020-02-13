<?php

namespace App\Controller;

use App\Entity\PeliculasMirant;
use App\Form\PeliculasMirantType;
use App\Repository\PeliculasMirantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/peliculas/mirant")
 */
class PeliculasMirantController extends AbstractController
{
    /**
     * @Route("/", name="peliculas_mirant_index", methods={"GET"})
     */
    
    public function index(PeliculasMirantRepository $peliculasMirantRepository, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        return $this->render('peliculas_mirant/index.html.twig', [
            'peliculas_mirants' => $peliculasMirantRepository->findAll(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/new", name="peliculas_mirant_new", methods={"GET","POST"})
     */
    public function new(Request $request, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        $peliculasMirant = new PeliculasMirant();
        $form = $this->createForm(PeliculasMirantType::class, $peliculasMirant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($peliculasMirant);
            $entityManager->flush();

            return $this->redirectToRoute('peliculas_mirant_index');
        }

        return $this->render('peliculas_mirant/new.html.twig', [
            'peliculas_mirant' => $peliculasMirant,
            'form' => $form->createView(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}", name="peliculas_mirant_show", methods={"GET"})
     */
    public function show(PeliculasMirant $peliculasMirant, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        return $this->render('peliculas_mirant/show.html.twig', [
            'peliculas_mirant' => $peliculasMirant,
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="peliculas_mirant_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PeliculasMirant $peliculasMirant, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        $form = $this->createForm(PeliculasMirantType::class, $peliculasMirant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('peliculas_mirant_index');
        }

        return $this->render('peliculas_mirant/edit.html.twig', [
            'peliculas_mirant' => $peliculasMirant,
            'form' => $form->createView(),
            'user' => $user1,
        ]);
    }

    /**
     * @Route("/{id}", name="peliculas_mirant_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PeliculasMirant $peliculasMirant, SessionInterface $session): Response
    {
        $user1 = $session->get('nombre_usuario');
        if ($this->isCsrfTokenValid('delete'.$peliculasMirant->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($peliculasMirant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('peliculas_mirant_index');
    }
}
