<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController {

    /**
     * @Route("/{vueRouting}", name="index")
     * @return Response
     */
    public function index () {
        return $this->render ('app.html.twig');
    }
}