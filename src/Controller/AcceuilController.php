<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AcceuilController extends AbstractController {
    public function index() : Response  {
        return $this ->render("pages\acceuil.html.twig");  
        
    }
}
