<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class VoyageController extends AbstractController {
    
    public function index () : Response {
        return $this ->render("pages\voyages.html.twig");
    }
}
