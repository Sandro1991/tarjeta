<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cancha;
use AppBundle\Entity\Reserva;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{

    public function indexAction(Request $request)
    {

        return $this->render('index/index.html.twig', array(

        ));
    }

    public function langAction(Request $request)
    {

        return $this->redirectToRoute('app_default', array($request));
    }

    public function campAction()
    {
        $em = $this->getDoctrine()->getManager();
        $campeonatos = $em->getRepository('AppBundle:Campeonato')->findAll();


        return $this->render('index/campeonatos.html.twig', array(
            'campeonatos' => $campeonatos,

        ));
    }


    public function compAction()
    {
        $em = $this->getDoctrine()->getManager();

        $complejos = $em->getRepository('AppBundle:Complejo')->findAll();

        return $this->render('index/complejos.html.twig', array(
            'complejos' => $complejos,

        ));
    }

    public function desc_canchaAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $db = $em->getConnection();
        $query = "SELECT * FROM comp_serv INNER JOIN complejo ON comp_serv.id_comp = complejo.id_comp INNER JOIN servicio ON comp_serv.id_serv = servicio.id_serv WHERE comp_serv.id_comp = ".$id;
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $descrip = $stmt->fetchAll();

        foreach ($descrip as $descri){
            $array = $descri;
        }
        return $this->render('index/desc_cancha.html.twig', array(
            'descri' => $array,

    ));

    }
    
    

    public function contactAction()
    {
        return $this->render('index/contact.html.twig', array(

        ));
    }

    public function reservaAction(Request $request, $id)
    {
//        $h = $request->get('id');
//        $em = $this->getDoctrine()->getManager();
//        $repo_canchas= $em->getRepository('AppBundle:Cancha')->findOneByIdComp(1);
//
//        var_dump($repo_canchas);
//
//        exit();

        $reserva = new Reserva();
        $form = $this->createForm('AppBundle\Form\ReservaType', $reserva);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reserva);
            $em->flush($reserva);

            return $this->redirectToRoute('champ_show', array('id' => $reserva->getIdCanch()));

        }
//        elseif ($form->isSubmitted() && !$form->isValid()){
//
//            $em = $this->getDoctrine()->getManager();
//            $reserva_repo = $em->getRepository('AppBundle:Reserva');
//            $reserva_query = $reserva_repo->findBy(array('fecha_reserva'=> $reserva->getFechaReserva()));
//
//            echo 'fecha ok';
//
//            return $this->render('index/reserva-2.html.twig', array(
//
//                'reserva' => $reserva,
//                'form' => $form->createView(),
//            ));
//        }

        return $this->render('index/reserva.html.twig', array(
            'reserva' => $reserva,
            'form' => $form->createView(),
        ));

    }

    public function verificationAction()
    {
        return $this->render('index/reserva-2.html.twig', array(

        ));
    }

    /**
     * @Route("{_locale}/index/descrip_cancha/calendar/email", name= "send_email")
     **/
    public function emailAction()
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('Hello Team tarjetaroja.com')
            ->setFrom('santycabj95@gmail.com')
            ->setTo('sandronicolasm@gmail.com')
            ->setBody(
                $this->renderView(
                    'index/email.html.twig',
                    array()
                ),
                'text/html'
            )
        ;
        $this->get('mailer')->send($message);

        return $this->render(':index:email_send.html.twig',array(
        ));
    }
}