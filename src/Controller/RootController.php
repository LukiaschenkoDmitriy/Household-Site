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

    #[Route("/news", name:"app_news")]
    public function news(): Response {
        return $this->render("page/news.html.twig");
    }

    #[Route("/gallery", name:"app_gallery")]
    public function gallery(): Response {
        return $this->render("page/gallery.html.twig");
    }

    #[Route("/contact", name:"app_contact")]
    public function contact(): Response {
        return $this->render("page/contact.html.twig");
    }
}
