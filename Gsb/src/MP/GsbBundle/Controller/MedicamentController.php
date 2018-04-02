<?php

namespace MP\GsbBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

use MP\GsbBundle\Entity\Medicaments;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use Symfony\Component\Form\Extension\Core\Type\DateType;

use Symfony\Component\Form\Extension\Core\Type\FormType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Core\Type\NumberType;

use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\HttpFoundation\Request;

class MedicamentController extends Controller
{
	public function listeAction()
	{
		
		$reposity = $this->getDoctrine()
		->getManager()
		->getRepository('MPGsbBundle:Medicaments');

		$listMedocs = $reposity->findAll();

		return $this->render('MPGsbBundle:Medicament:listeMedoc.html.twig', array('listMedocs' => $listMedocs));
	}

	public function FormAction(Request $request,string $action,int $id)
    {

      

      if ($action =="modifier") {

        $Medicament = $this->getDoctrine()

        ->getManager()

        ->getRepository('MPGsbBundle:Medicaments')

        ->find($id);

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $Medicament);
      }
      elseif ($action == "ajouter") {
        // On crée un objet Advert

    
        $Medicament = new Medicaments();

    // On crée le FormBuilder grâce au service form factory

    $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $Medicament);
      }
    
    // On ajoute les champs de l'entité que l'on veut à notre formulaire

    $formBuilder

      ->add('Nom_Commercial',      TextType::class)

      ->add('Composition',     TextType::class)

      ->add('Effet',   TextType::class)

      ->add('Contre_Indic',    TextType::class)

      ->add('PrixEchantillon', NumberType::class)

      ->add('save',      SubmitType::class)

    ;

    $form = $formBuilder->getForm();

     if ($request->isMethod('POST')) {

      // On fait le lien Requête <-> Formulaire

      // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur

      $form->handleRequest($request);


      // On vérifie que les valeurs entrées sont correctes

      // (Nous verrons la validation des objets en détail dans le prochain chapitre)

      if ($form->isValid()) {

        // On enregistre notre objet $advert dans la base de données, par exemple

        $em = $this->getDoctrine()->getManager();

        $em->persist($Medicament);

        $em->flush();

        return $this->redirect($this->generateUrl('Afficher'));

      }
  }

    
    // À ce stade, le formulaire n'est pas valide car :

    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire

    // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau

    return $this->render('MPGsbBundle:Medicament:addMedoc.html.twig', array(

      'form' => $form->createView(),

    ));

}
public function SupprimerAction($id)
  {
    
    $Medicament = $this->getDoctrine()

        ->getManager()

        ->getRepository('MPGsbBundle:Medicaments')

        ->find($id);

    $em = $this->getDoctrine()->getManager();

        $em->remove($Medicament);

        $em->flush();

        return $this->redirect($this->generateUrl('Afficher'));
  }
}
?>

