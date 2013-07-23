<?php

namespace Fourcoders\Bundle\CrudgenerateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FourcodersCrudgenerateBundle:Default:index.html.twig', array('name' => $name));
    }
}
