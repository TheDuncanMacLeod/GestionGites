<?php

namespace App\Controller;

use App\Entity\Gite;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController{
    /**
    * @Route("/", name="home")
     */
    public function index()
    {
        // $gite = new Gite();
        // $gite
        //       ->setName('Mon premier Gite')
        //       ->setDescription('Mon super Gite avec vu sur la mer')
        //       ->setSurface(90)
        //       ->setBedrooms(3)
        //       ->setAdress('1664 rue de la Brasserie')
        //       ->setCity('Lille')
        //       ->setPostalCode('59000');


        // $em = $this->getDoctrine()->getManager();   
        // $em->persist($gite);
        // $em->flush();

        return $this->render('home/index.html.twig');
    }
}
