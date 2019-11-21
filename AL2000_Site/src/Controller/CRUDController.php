<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CRUDController extends  AbstractController {

    /**
     * @Route("/crud",name="Crud")
     * @return Response
     */
    public function index():Response{
        return $this->render('CRUD/Tous.html.twig');    }
}