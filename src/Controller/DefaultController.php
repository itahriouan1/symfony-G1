<?php

namespace App\Controller;

use stdClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController {

    /**
     * @Route("/", name="index")
     * @return Response
     */
    public function indexAction() {

        $personne = new stdClass();
        $personne->Nom = 'ITAHRIOUAN';
        $personne->Prenom = 'Zakaria';

        $t=[[1,2,3],[4,5,6],[7,8,9]];
        return $this->render('base.html.twig', ['p'=>$personne, 't'=>$t]);

    }
    /**
     *@Route("/home{p}", name="home")
     *@return Response
     */
    public function home($p){
        $html = '<h1>Home</h1>';
        return $this->render('home.html.twig',['p'=>$p, 'html'=>$html]);

    }


}