<?php

namespace Akina\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AkinaImmobilierBundle:Default:index.html.twig');
    }
}
