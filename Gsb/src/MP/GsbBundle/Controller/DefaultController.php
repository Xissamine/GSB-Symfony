<?php

namespace MP\GsbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MPGsbBundle:Default:index.html.twig');
    }
}
