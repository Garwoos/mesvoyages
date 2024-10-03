<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class AcceuilController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController {
    public function index() : Response  {
        return new response('hello world');
        
    }
}
