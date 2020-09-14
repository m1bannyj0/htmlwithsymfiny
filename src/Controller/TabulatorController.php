<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TabulatorController extends AbstractController
{
    /**
     * @Route("/", name="tabulator")
     */
    public function index()
    {
        $report = $this->getDoctrine()
                         ->getRepository(Product::class)
                         ->findAll();
        return $this->render('home/index.html.twig'
        ,[
          'controller_name' => 'HomeController'
          ,"report" => json_encode($report)
         ]
    }
}
