<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\{Contactar,Admin,PagContacto,PagEntidades,PagFormaParte,PagInicio,PagMirant,PeliculasMirant,PagNuestraPropuesta,PagJornadas};
use App\Repository\ContactarRepository;
use App\Form\ContactarType;
use Symfony\Component\HttpFoundation\Request;
use App\Form\EnvioContactoType;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request, SessionInterface $session)
    {
        $indexBBDD=$this->getDoctrine()->getRepository(PagInicio::Class)->findAll();
        $Mirant=$this->getDoctrine()->getRepository(PagMirant::Class)->findAll();
        $user1 = $session->get('nombre_usuario');
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'imagenheader' => 'header-inicio.jpg',
            'indexbbdd' => $indexBBDD,
            'EdicionMirant' => $Mirant, 
            'first1' => array_slice(array_reverse($indexBBDD),0,1),
        ]);
    }

       /**
     * @Route("/nuestraPropuesta", name="nuestraPropuesta")
     */
    public function nuestraPropuesta(SessionInterface $session)
    {
        $nuestraPropuestaBBDD=$this->getDoctrine()->getRepository(PagNuestraPropuesta::Class)->findAll();
        $Mirant=$this->getDoctrine()->getRepository(PagMirant::Class)->findAll();
        //$user1 = $session->get('nombre_usuario');
        return $this->render('main/nuestrapropuesta.html.twig', [
            'imagenheader' => 'head\ fotos/fotoHeadNuestraPropuesta.jpg',
            'nuestraPropuestaBBDD' => $nuestraPropuestaBBDD,
            'EdicionMirant' => $Mirant, 
        ]);
    }

    /**
     * @Route("/contacto", name="contacto")
     */
    public function contacto(Request $request, SessionInterface $session)
    {
        $contactoBBDD=$this->getDoctrine()->getRepository(PagContacto::Class)->findAll();
        $user1 = $session->get('nombre_usuario');
        $contactoTo=new Contactar();
        $form=$this->CreateForm(EnvioContactoType::Class, $contactoTo);
        $Mirant=$this->getDoctrine()->getRepository(PagMirant::Class)->findAll();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManager=$this->getDoctrine()->getManager();
            $contactoTo->setFecha(new \DateTime('now'));
            $entityManager->persist($contactoTo);
            $entityManager->flush();}
        return $this->render('main/contacto.html.twig', [
            'imagenheader' => 'Namuno.-Visita-seguiment-2-maig-2006.jpg',
            'form' => $form->CreateView(),
            'contactobbdd' => $contactoBBDD,
            'EdicionMirant' => $Mirant, 
        ]);

    }

    /**
     * @Route("/mirant/{edicion?1}", name="mirant")
     */
    public function mirant($edicion, SessionInterface $session)
    {
        $mirantBBDD=$this->getDoctrine()->getRepository(PagMirant::Class)->findAll();
        $peliculasBBDD=$this->getDoctrine()->getRepository(PeliculasMirant::Class)->findAll();
        $user1 = $session->get('nombre_usuario');
        $Mirant=$this->getDoctrine()->getRepository(PagMirant::Class)->findAll();
        return $this->render('main/mirant.html.twig', [
          'imagenheader' => 'header-inicio.jpg',
          'mirantBBDD' => $mirantBBDD,
          'peliculasBBDD' => $peliculasBBDD,
          'EdicionMirant' => $Mirant, 
          'edicion' => $edicion
        ]);
    }

    /**
     * @Route("/jornadasFormativas", name="jornadasFormativas")
     */
    public function jornadas(SessionInterface $session)
    {
        $jornadasBBDD=$this->getDoctrine()->getRepository(PagJornadas::Class)->findAll();
        $user1 = $session->get('nombre_usuario');
        $Mirant=$this->getDoctrine()->getRepository(PagMirant::Class)->findAll();
        return $this->render('main/jornadas.html.twig', [
          'imagenheader' => 'header-inicio.jpg',
          'jornadasBBDD' => $jornadasBBDD,
          'EdicionMirant' => $Mirant, 
        ]);
    }

    /**
     * @Route("/entidades", name="entidades")
     */
    public function entidades(SessionInterface $session)
    {
        $user1 = $session->get('nombre_usuario');
        $Mirant=$this->getDoctrine()->getRepository(PagMirant::Class)->findAll();
        return $this->render('main/entidades.html.twig', [
          'imagenheader' => '/head\ fotos/fotoHeadEntidades.jpg',
          'EdicionMirant' => $Mirant, 
        ]);
    }

    /**
     * @Route("/expandido", name="expandido")
     */
    public function expandido()
    {
        $Mirant=$this->getDoctrine()->getRepository(PagMirant::Class)->findAll();
        return $this->render('main/leermas.html.twig', [
          'imagenheader' => 'header-inicio.jpg',
          'EdicionMirant' => $Mirant,
        ]);
    }

    /**
     * @Route("/formaParte", name="formaParte")
     */
    public function formaParte(SessionInterface $session)
    {
        $Mirant=$this->getDoctrine()->getRepository(PagMirant::Class)->findAll();
        $user1 = $session->get('nombre_usuario');
        return $this->render('main/forma_parte.html.twig', [
          'imagenheader' => '1690.jpg',
          'EdicionMirant' => $Mirant, 
        ]);
    }

     /**
     * @Route("/adminlogin", name="adminlogin")
     */
    public function loginadmin(Request $request, SessionInterface $session)
    {
        $user1 = $session->get('nombre_usuario');
        $user= $request->request->get("user");
        $password= $request->request->get("password");
        $usuarioBBDD=$this->getDoctrine()
        ->getRepository(Admin::class)
        ->findOneBy(['usuario' => $user]);
if ($user1) {
    return $this->redirectToRoute('indexAdmin');
}
        if ($usuarioBBDD){
            if ($usuarioBBDD->getPassword()==$password) {
                $session->set('nombre_usuario', $user);
                $session->set('password', $password);
                    return $this->redirectToRoute('indexAdmin', [
                        'user' => "",
                ]);
            }
}

        else{

            return $this->render('adminpage/login.html.twig', [

                'controller_name' => 'AdminController',
                'user' =>"",
                'EdicionMirant' => $Mirant, 
                ]);
            }
    }



    /**
     * @Route("/indexadmin", name="indexAdmin")
     */
    public function indexadmin(Request $request, SessionInterface $session, ContactarRepository $contactarRepository)
    {
        $user1 = $session->get('nombre_usuario');

        if ( $user1=="") {
            return $this->redirectToRoute('adminlogin'); }
        return $this->render('adminpage/index.html.twig', [
            'controller_name' => 'AdminController',
            'user' => $user1,
            'contactars' => $contactarRepository->findAll(),]);
 
    }


    //   /**
    //  * @Route("sendlogin", name="sendlogin")
    //  */
    // public function sendlogin(Request $request, SessionInterface $session)
    // {
    //     $user1= $request->request->get("nombre_usuario");
    //     $user= $request->request->get("user");
    //     $password= $request->request->get("password");

    //     // $usuarioBBDD=$this->getDoctrine()
    //     // ->getRepository(Usuario::class)
    //     // ->findOneBy(['nombre' => $user]);

    //     // $passwordBBDD=$this->getDoctrine()
    //     // ->getRepository(Usuario::class)
    //     // ->findOneBy(['contrasenya' => $password]);

    // if ($user !="" && $password !=""){

    //     $session->set('nombre_usuario', $user);
    //     $session->set('password', $password);
    //         return $this->redirectToRoute('indexAdmin', [
    //     ]);}
    // else{

    //        return $this->redirectToRoute('login');

    //     }

    // }

    // /**
    //  * @Route("/logOut", name="logOut")
    //  */
    // public function logOut(SessionInterface $session)
    // {
    //     $session->clear();
    //     $session->invalidate();
    //         return $this->redirectToRoute('index', [

    //     ]);
    // }
       /**
     * @Route("/form/logOut", name="logOut")
     */
    public function logOut(Request $request, SessionInterface $session)
    {
        $session->clear();
        $session->invalidate();
                return $this->redirectToRoute('adminlogin');

    }

}
