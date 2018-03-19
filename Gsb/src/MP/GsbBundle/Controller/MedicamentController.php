<?php

namespace MP\GsbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MedicamentController extends Controller
{
	public function listeAction()
	{
		
		$reposity = $this->getDoctrine()
		->getManager()
		->getRepository('MPGsbBundle:Medicament');

		$listMedocs = $reposity->findAll();

		return $this->render('MPGsbBundle:Medicament:listeMedoc.html.twig', array('listMedocs' => $listMedocs));
	}
}
?>