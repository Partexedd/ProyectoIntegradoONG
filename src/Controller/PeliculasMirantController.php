<?php

namespace App\Controller;

use App\Entity\{PeliculasMirant,PagMirant};
use App\Form\PeliculasMirant1Type;
use App\Repository\PeliculasMirantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/peliculas/mirant")
 */
class PeliculasMirantController extends AbstractController
{
    /**
     * @Route("/", name="peliculas_mirant_index", methods={"GET"})
     */
    public function index(PeliculasMirantRepository $peliculasMirantRepository): Response
    {
        // $dolor=$this->getDoctrine()->getRepository(PagMirant::Class)->findOneBy(['id' => '1']);
        // var_dump($dolor);
        return $this->render('peliculas_mirant/index.html.twig', [
            'peliculas_mirants' => $peliculasMirantRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="peliculas_mirant_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $peliculasMirant = new PeliculasMirant();
        $form = $this->createForm(PeliculasMirant1Type::class, $peliculasMirant);
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
        ]);
    }

    /**
     * @Route("/{id}", name="peliculas_mirant_show", methods={"GET"})
     */
    public function show(PeliculasMirant $peliculasMirant): Response
    {
        return $this->render('peliculas_mirant/show.html.twig', [
            'peliculas_mirant' => $peliculasMirant,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="peliculas_mirant_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PeliculasMirant $peliculasMirant): Response
    {
        $form = $this->createForm(PeliculasMirant1Type::class, $peliculasMirant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('peliculas_mirant_index');
        }

        return $this->render('peliculas_mirant/edit.html.twig', [
            'peliculas_mirant' => $peliculasMirant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="peliculas_mirant_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PeliculasMirant $peliculasMirant): Response
    {
        if ($this->isCsrfTokenValid('delete'.$peliculasMirant->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($peliculasMirant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('peliculas_mirant_index');
    }
}
