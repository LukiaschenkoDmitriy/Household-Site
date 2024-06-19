<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RootController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(): Response
    {
        return $this->render('page/main.html.twig');
    }

    #[Route("/about-us", name:"app_about")]
    public function aboutUs(): Response {
        return $this->render("page/about.html.twig");
    }

    #[Route("/offer", name:"app_offer")]
    public function offer(): Response {
        return $this->render("page/offer.html.twig");
    }
}
