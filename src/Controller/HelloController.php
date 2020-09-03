<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route(methods={"GET"}, name="hello.get", path="/hello")
     *
     * @return Response
     */
    public function indexAction(): Response
    {
        return new Response("Hello world!");
    }
}