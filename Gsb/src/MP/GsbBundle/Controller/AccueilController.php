<?php

namespace MP\GsbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AccueilController extends Controller
{
	public function indexAction()
	{
		$content = $this->get('templating')->render('MPGsbBundle:Accueil:accueil.html.twig');

    return new Response($content);
	}
}
?>
