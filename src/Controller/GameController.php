<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/game", name="game")
 */
class GameController extends BaseController {

    /**
     * @Route("/", name="index")
     */
    public function index () {
        return $this->render ('app.html.twig');
    }

    /**
     * @Route("/create", name="create")
     */
    public function create () {
        return new JsonResponse (['name' => 'WORD GAME 2']);
    }
}