<?php

namespace EK\HomepageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //comme
        return $this->render('EKHomepageBundle:Default:index.html.twig');
    }
}
