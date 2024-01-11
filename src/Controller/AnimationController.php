<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AnimationController extends AbstractController
{
    #[Route('/hover-color', name: 'animation_hover_color')]
    public function hoverColor(): Response
    {
        return $this->render('animation/hover-color.html.twig');
    }

    #[Route('/click-color', name: 'animation_click_color')]
    public function clickColor(): Response
    {
        return $this->render('animation/click-color.html.twig');
    }

    #[Route('/click-size', name: 'animation_click_size')]
    public function clickSize(): Response
    {
        return $this->render('animation/click-size.html.twig');
    }
}
