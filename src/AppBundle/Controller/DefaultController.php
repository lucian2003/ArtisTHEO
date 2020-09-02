<?php

namespace AppBundle\Controller;

use AppBundle\Entity\artista;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {

    	$artistas = $this->getDoctrine()
            ->getRepository('AppBundle:artista')
            ->findAll();

        return $this->render('AppBundle:default:index.html.twig', array(
            'artistas' => $artistas
        ));

    }
}
