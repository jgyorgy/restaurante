<?php

namespace App\RestauranteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PageController extends Controller {

  /**
   * @Route("/")
   */
  public function indexAction() {
    return $this->render('AppRestauranteBundle:Page:index.html.twig');
  }

  /**
   * @Route("/restaurante", name="afiseaza_restaurante")
   */
  public function afiseazaRestauranteAction() {
    $em = $this->getDoctrine()->getEntityManager();
    $restaurante = $em->getRepository('AppRestauranteBundle:Restaurant')->findAll();
    return $this->render('AppRestauranteBundle:Page:afiseazaRestaurante.html.twig', array('restaurante' => $restaurante));
  }

}
