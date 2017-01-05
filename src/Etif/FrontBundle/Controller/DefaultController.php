<?php

namespace Etif\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EtifFrontBundle:Default:index.html.twig');
    }
}
