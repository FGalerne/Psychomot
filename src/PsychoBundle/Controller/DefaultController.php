<?php

namespace PsychoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PsychoBundle:Default:index.html.twig');
    }
}
