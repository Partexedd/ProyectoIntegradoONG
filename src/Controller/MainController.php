<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\{Contactar , Admin, PagMirant};
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
        $user1 = $session->get('nombre_usuario');
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'imagenheader' => 'header-inicio.jpg'
        ]);
    }

       /**
     * @Route("/nuestraPropuesta", name="nuestraPropuesta")
     */
    public function nuestraPropuesta(SessionInterface $session)
    {
        //$user1 = $session->get('nombre_usuario');
        return $this->render('main/nuestrapropuesta.html.twig', [
          'imagenheader' => 'head\ fotos/fotoHeadNuestraPropuesta.jpg'
        ]);
    }

    /**
     * @Route("/contacto", name="contacto")
     */
    public function contacto(Request $request, SessionInterface $session)
    {
        $user1 = $session->get('nombre_usuario');
        $contactoTo=new Contactar();
        $form=$this->CreateForm(EnvioContactoType::Class, $contactoTo);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManager=$this->getDoctrine()->getManager();
            $contactoTo->setFecha(new \DateTime('now'));
            $entityManager->persist($contactoTo);
            $entityManager->flush();}
        return $this->render('main/contacto.html.twig', [
          'imagenheader' => 'Namuno.-Visita-seguiment-2-maig-2006.jpg',
            'form' => $form->CreateView()
        ]);

    }

    /**
     * @Route("/mirant", name="mirant")
     */
    public function mirant(SessionInterface $session)
    {
        // $mirant=$this->getDoctrine()->getRepository(PagMirant::Class)->findAll();
        // $imagenes=str_replace(" ","");
        // $img=explode(",",$imagenes);
        $user1 = $session->get('nombre_usuario');
        return $this->render('main/mirant.html.twig', [
          'imagenheader' => 'header-inicio.jpg'
        ]);
    }
    /**
     * @Route("/inscripcion_mirant", name="inscripcion_mirant")
     */
    public function inscripcion_mirant(SessionInterface $session)
    {
        $user1 = $session->get('nombre_usuario');
        return $this->render('main/inscripcion_mirant.html.twig', [
          'imagenheader' => 'header-inicio.jpg'
        ]);
    }

    /**
     * @Route("/jornadasFormativas", name="jornadasFormativas")
     */
    public function jornadas(SessionInterface $session)
    {
        $user1 = $session->get('nombre_usuario');
        return $this->render('main/jornadas.html.twig', [
          'imagenheader' => 'header-inicio.jpg'
        ]);
    }

    /**
     * @Route("/nuestraPropuesta/entidades", name="entidades")
     */
    public function entidades(SessionInterface $session)
    {
        //$user1 = $session->get('nombre_usuario');
        return $this->render('main/entidades.html.twig', [
          'imagenheader' => '/head\ fotos/fotoHeadEntidades.jpg'
        ]);
    }

    
    /**
     * @Route("/infoEntidad", name="entidad")
     */
    public function infoEntidades(SessionInterface $session)
    {
        //$user1 = $session->get('nombre_usuario');
        return $this->render('main/infoEntidad.html.twig', [
          'imagenheader' => '/head\ fotos/fotoHeadNuestraPropuesta.jpg'
        ]);
    }

    /**
     * @Route("/expandido", name="expandido")
     */
    public function expandido()
    {
        return $this->render('main/leermas.html.twig', [
          'imagenheader' => 'CMM-mani-1024x653.jpg'
        ]);
    }

    /**
     * @Route("/formaParte", name="formaParte")
     */
    public function formaParte(SessionInterface $session)
    {
        $user1 = $session->get('nombre_usuario');
        $user1 = $session->get('nombre_usuario');
        return $this->render('main/forma_parte.html.twig', [
          'imagenheader' => '1690.jpg'
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
