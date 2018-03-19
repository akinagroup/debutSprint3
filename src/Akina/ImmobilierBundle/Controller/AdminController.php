<?php

namespace Akina\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Akina\ImmobilierBundle\Entity\Image;
use Akina\ImmobilierBundle\Form\ImageType;
use Akina\ImmobilierBundle\Entity\Contrat;
use Akina\ImmobilierBundle\Form\ContratType;
use Akina\ImmobilierBundle\Entity\ContratProp;
use Akina\ImmobilierBundle\Form\ContratPropType;
use Akina\ImmobilierBundle\Entity\Paiement;
use Akina\ImmobilierBundle\Form\PaiementType;
use Akina\ImmobilierBundle\Entity\Biens;
use Akina\ImmobilierBundle\Form\BiensType;
use Symfony\Component\HttpFoundation\Request;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;

class AdminController extends Controller
{
    /**
     * @Route("/list",name="Res")
     */
    public function listAction(Request $request)
    {
        $em1 = $this->getDoctrine()->getManager();

        $Type = $em1->getRepository('AkinaImmobilierBundle:TypeBien')->findAll();
        $em2 = $this->getDoctrine()->getManager();

        $Localite = $em2->getRepository('AkinaImmobilierBundle:Localite')->findAll();

        $em = $this->getDoctrine()->getManager();

        $listeReservations = $em->getRepository('AkinaImmobilierBundle:Biens')->findAll();

        return $this->render('AkinaImmobilierBundle:Admin:list.html.twig', array('reservations' => $listeReservations, 'Type' => $Type, 'Localite' => $Localite,
            // ...
        ));
    }

    /**
     * @Route("/disponibilite/{id}",name="disponibilite")
     */
    public function disponibiliteAction($id)
    {
        // echo $id;
        $user = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AkinaImmobilierBundle:Biens')
        ->find($id);
        $etat = $user->getEtat();
        if ($etat == 0) {
            $user->setEtat(1);
        } else {
            $user->setEtat(0);
        }
        $em = $this
        ->getDoctrine()
        ->getManager();

        $em->flush($user);

        return $this->redirectToRoute('Res');
    }

    /**
     * @Route("/valide/{id}",name="valide")
     */
    public function valideAction($id)
    {
        // echo $id;
        $user = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AkinaImmobilierBundle:Reservation')
        ->find($id);
        $etat = $user->getEtat();
        if ($etat == 0) {
            $user->setEtat(1);
        } else {
            $user->setEtat(0);
        }
        $em = $this
        ->getDoctrine()
        ->getManager();

        $em->flush($user);

        return $this->render('AkinaImmobilierBundle:Admin:contrat.html.twig', array(
    ));
    }

    /**
     * @Route("/add",name="disponi")
     */
    public function addAction(Request $request)
    {
        $image = new Image();

        $bien = new Biens();

        $formB = $this->get('form.factory')->create(BiensType::class, $bien);
        $formI = $this->get('form.factory')->create(ImageType::class, $image);
        if ($request->isMethod('POST') && $formB->handleRequest($request)->isValid()) {
            $bien->setEtat('0');
            $em = $this->getDoctrine()->getManager();

            $em->persist($bien);

            $em->flush();

            $uploads = $request->query->get('uploads');
            /* foreach ($_FILES['uploads']['name'] as $file) {
                 $image=$file->setImage($uploads);
                 $image=$file->setBien($bien);
                 echo '<li>' . $file . '</li>';
                 $em = $this->getDoctrine()->getManager();

             $em->persist($image);

             $em->flush();
               }*/

            // Ajoutez cette ligne :

            // c'est elle qui déplace l'image là où on veut les stocker

            // $advert->getImage()->upload();

            // Le reste de la méthode reste inchangé

            // ...

            // ...
        }

        return $this->render('AkinaImmobilierBundle:Admin:add.html.twig', array('formB' => $formB->createView(), 'formI' => $formI->createView(),
            // ...
        ));
    }

    /**
     * @Route("/listRes",name="poni")
     */
    public function listResAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $listeReservations = $em->getRepository('AkinaImmobilierBundle:Reservation')->findReservation();

        return $this->render('AkinaImmobilierBundle:Admin:listRes.html.twig', array('reservations' => $listeReservations,
            // ...
        ));
    }

    /**
     * @Route("/tes",name="teste")
     */
    public function testeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $bien = $em->getRepository('AkinaImmobilierBundle:Reservation');
        $biens = $bien->findBien(1);

        echo count($biens);
    }

    /**
     * @Route("/con/{id}/{bien}",name="contrat")
     */
    public function contratAction(Request $request, $id, $bien)
    {
        $user = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AkinaImmobilierBundle:Reservation')
        ->findBien($bien);
        ///$client = $user->getClient();

        // $biens = $em ->getRepository('AkinaImmobilierBundle:Biens')->findBy(array('id'=>$user));
        $idterme = 1;
        $em = $this
        ->getDoctrine()
        ->getManager();
        $terme = $em->getRepository('AkinaImmobilierBundle:TermeContrat')->find($idterme);
        $termes = $em->getRepository('AkinaImmobilierBundle:TermeContrat')->findBy(array('id' => $idterme));

        //echo $terme;
        $reserve = new Contrat();

        $form = $this->get('form.factory')->create(ContratType::class, $reserve);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $biens = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AkinaImmobilierBundle:Biens')
        ->find($bien);
            $reserve->setBien($biens);
            $montant = $biens->getPrix();
            $reserve->setMensualite($montant);
            $reserve->setCaution($montant);
            echo $biens;

            $etatb = $biens->getEtat();
            $biens->setEtat(1);

            foreach ($user as $users) {
                $etat = $users->getEtat();

                if ($etat == 0) {
                    $users->setEtat(1);
                }

                $em = $this
        ->getDoctrine()
        ->getManager();

                $em->flush($users);
            }

            $em = $this->getDoctrine()->getManager();
            $Reservations = $em->getRepository('AkinaImmobilierBundle:Reservation')->find($id);
            $client = $Reservations->getClient();
            //  echo $Reservations;
            // Ajoutez cette ligne :

            // c'est elle qui déplace l'image là où on veut les stocker

            // $advert->getImage()->upload();

            // Le reste de la méthode reste inchangé

            $date = date('Y-m-d');
            $reserve->setdateDeDebut($date);

            $reserve->setTerme($terme);
            $reserve->setClient($client);

            $em->persist($reserve);
            $em->flush();

            $paiement = new Paiement();
            $mensualite = $reserve->getMensualite();
            // $caution = $reserve ->getCaution();
            //$montant = $mensualite + $caution;
            $formp = $this->get('form.factory')->create(PaiementType::class, $paiement);
            $em = $this->getDoctrine()->getManager();
            $date = date('Y-m-d');

            $date1 = date('Y-m');
            $paiement->setdateDePaiement($date);
            $paiement->setContrat($reserve);
            $paiement->setMontantPayer($mensualite);
            $paiement->setDuree($date1);

            $em->persist($paiement);

            $em->flush();
            $html = $this->renderView('AkinaImmobilierBundle:Admin:retour.html.twig', array(
                'some' => $paiement,
            ));

            return new PdfResponse(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
                'file.pdf'
            );
            // ...
        }

        $em = $this->getDoctrine()->getManager();

        $Reservation = $em->getRepository('AkinaImmobilierBundle:Reservation')->findBy(array('id' => $id));
        //  echo $Reservations;

        return $this->render('AkinaImmobilierBundle:Admin:contrat.html.twig', array('form' => $form->createView(), 'reservation' => $Reservation, 'terme' => $termes,
        ));
    }

    /**
     * @Route("/paye",name="paiement")
     */
    public function paiementAction()
    {
        $em = $this
        ->getDoctrine()
        ->getManager();

        $listeReservations = $em->getRepository('AkinaImmobilierBundle:Paiement')->findAll();
        echo count($listeReservations);

        return $this->render('AkinaImmobilierBundle:Admin:paiement.html.twig', array('reservations' => $listeReservations,
             // ...
         ));
    }

    /**
     * @Route("/detail/{id}",name="detail")
     */
    public function DetailAction($id)
    {
        $detailreservation = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AkinaImmobilierBundle:Reservation')
        ->findBy(array('id' => $id));

        return $this->render('AkinaImmobilierBundle:Admin:Detail.html.twig', array('detail' => $detailreservation,
        ));
    }

    /**
     * @Route("/detBien/{id}",name="detailBien")
     */
    public function detailBienAction($id)
    {
        $detailreservation = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AkinaImmobilierBundle:Image')
        ->findBy(array('biens' => $id));
        //echo count($detailreservation);
        return $this->render('AkinaImmobilierBundle:Admin:detailBien.html.twig', array('detail' => $detailreservation,
        ));
    }

    /**
     * @Route("/contratProp/{id}/{bien}/{proprio}",name="contratProprietaire")
     */
    public function contratProprietaireAction(Request $request, $id, $bien, $proprio)
    {
        $em = $this->getDoctrine()->getManager();

        // ...
        $confie = $em->getRepository('AkinaImmobilierBundle:ConfessionBiens')->findBy(array('id' => $id));

        $user = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AkinaImmobilierBundle:ConfessionBiens')
        ->find($bien);
        ///$client = $user->getClient();
        $date = date('Y-m-d');
        //$y = $date + 1;
        // $date1 = date('Y-m-d');

        // $biens = $em ->getRepository('AkinaImmobilierBundle:Biens')->findBy(array('id'=>$user));
        $idterme = 2;
        $em = $this
        ->getDoctrine()
        ->getManager();
        $terme = $em->getRepository('AkinaImmobilierBundle:TermeContrat')->find($idterme);
        $termes = $em->getRepository('AkinaImmobilierBundle:TermeContrat')->findBy(array('id' => $idterme));

        //echo $terme;
        $reserve = new ContratProp();

        $form = $this->get('form.factory')->create(ContratPropType::class, $reserve);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $biens = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AkinaImmobilierBundle:Biens')
        ->find($bien);
            $prop = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AkinaImmobilierBundle:Proprietaire')
        ->find($proprio);
            $reserve->setBien($biens);
            $montant = $biens->getPrix();
            $reserve->setMontantAllocation($montant * 9);
            $reserve->setCommissionAgence($montant * 3);
            $reserve->setTotal($montant * 12);
            $reserve->setDateDeDebut($date);
            $reserve->setDateDeFin($date + 1);
            $reserve->setBien($biens);
            $reserve->setProprietaire($prop);
            $reserve->setDuree('1 an');

            //  echo $biens;

            $em = $this
        ->getDoctrine()
        ->getManager();
            $em->persist($reserve);

            $em->flush();

            $html = $this->renderView('AkinaImmobilierBundle:Admin:retour.html.twig', []
            );

            // $html = $this->renderView("AppBundle::content.html.twig", []);
            $filename = 'filename.pdf';
            $pdf = $this->get('knp_snappy.pdf')->getOutputFromHtml($html);
            $message = \Swift_Message::newInstance()
                        ->setSubject('...')
                        ->setFrom('nefertitisankare17@gmail.com')
                        ->setTo('nefertitisankare17@gmail.com');
            $body = $this->templating->render('AkinaImmobilierBundle::Layout/layout.html.twig', []);
            $message->setBody($body, 'text/html');

            //join PDF
            $attachement = \Swift_Attachment::newInstance($pdf, $filename, 'application/pdf');
            $message->attach($attachement);
            $this->mailer->send($message);
        }

        return $this->render('AkinaImmobilierBundle:Admin:contratProprietaire.html.twig', array('form' => $form->createView(), 'terme' => $termes, 'date' => $date, 'reservation' => $confie,
    ));
    }

    /**
     * @Route("/listConfession",name="ponid")
     */
    public function listConfessionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $listeReservations = $em->getRepository('AkinaImmobilierBundle:ConfessionBiens')->findAll();

        return $this->render('AkinaImmobilierBundle:Admin:listConfession.html.twig', array('reservations' => $listeReservations,
            // ...
        ));
    }
}
