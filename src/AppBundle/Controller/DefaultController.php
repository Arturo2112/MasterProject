<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);

    }

    /**
     * @Route("/hello-world", name="helloWorld")
     */

    public function helloWorldAction()
    {
       echo "<h1>Hola MIclo</h1>";
        die();
    }
	
	/**
     * @Route("/fin", name="fin")
     */

    public function fin()
    {
       echo "<h1>Hola Mundo sin Action</h1>";
        die();
    }
}
