<?php

namespace EK\HomepageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomepageController extends Controller
{

	public function viewAction($id) {

		

		return new Response("Affichage de l'annonce d'id : ".$id);
	}


    public function indexAction()
    {
		// Méthode courte
		$url = $this->generateUrl('ek_homepage_home');

		//return new Response($url);

		$content = $this->get('templating')->render('EKHomepageBundle:Homepage:index.html.twig', array( 'titre_page' => 'Home'));

		return new Response($content);
		//return $this->render('EKHomepageBundle:Homepage:index.html.twig');
    }
}
