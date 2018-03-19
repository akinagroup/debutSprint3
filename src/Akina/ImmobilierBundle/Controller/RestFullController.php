<?php

namespace Akina\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class RestFullController extends Controller
{
    /**
     * @Route("/listb", name="listdeBien")
     */
    public function listBienAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listeReservations = $em->getRepository('AkinaImmobilierBundle:Proprietaire')->findAll();

        $data = $this->get('jms_serializer')->serialize($listeReservations, 'json');
        if (!empty($listeReservations)) {
            $requete = array(
                'code' => 1,
                'message' => '',
            );

            $response = new Response($data);
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        } else {
            $requete = array(
                'code' => 0,
                'message' => 'Aucun proprietaire',
            );

            return new JsonResponse($requete, Response::HTTP_CREATED);
        }
    }

    /**
     * @Route("/updateBien")
     */
    public function updateBienAction()
    {
        return $this->render('AkinaImmobilierBundle:RestFull:update_bien.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/findBien")
     */
    public function findBienAction()
    {
        return $this->render('AkinaImmobilierBundle:RestFull:find_bien.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deleteBien/{id}")
     * @Method({"DELETE"})
     */
    public function deleteBienAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $listeReservations = $em->getRepository('AkinaImmobilierBundle:Proprietaire')->find($id);

        $data = $this->get('jms_serializer')->serialize($listeReservations, 'json');

        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/detailBien")
     */
    public function detailBienAction()
    {
        return $this->render('AkinaImmobilierBundle:RestFull:detail_bien.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/addBien")
     * @Method({"POST"})
     */
    public function addBienAction(Request $request)
    {
        $data = $request->getContent();

        $listeReservations = $this->get('jms_serializer')->deserialize($data, 'Akina\ImmobilierBundle\Entity\Proprietaire', 'json');
        $requete = array();
        if (!empty($listeReservations)) {
            $requete = array(
                'code' => 1,
                'message' => 'Bien enregistrer',
            );

            $em = $this->getDoctrine()->getManager();

            $em->persist($listeReservations);

            $em->flush();

            return new JsonResponse($requete, Response::HTTP_CREATED);
        } else {
            $requete = array(
                'code' => 0,
                'message' => 'Bien non enregistrer',
            );

            return new JsonResponse($requete, Response::HTTP_CREATED);
        }
    }

    /**
     * @Route("/editBien/{id}")
     * @Method({"GET"})
     */
    public function editBienAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $listeReservations = $em->getRepository('AkinaImmobilierBundle:Proprietaire')->findBy(array('id' => $id));

        $data = $this->get('jms_serializer')->serialize($listeReservations, 'json');

        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
