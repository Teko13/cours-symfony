<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomePage extends AbstractController
{
    #[Route('/', name: "home")]
    public function homePage()
    {
        return $this->render("home_page.html.twig", []);
    }
}
