<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\RecomendacionPelicula;
use App\Form\Recomendacion;

class RecomendacionController extends AbstractController
{
    /**
     * @Route("/recomendacion", name="recomendacion")
     */
    public function index(): Response
    {
        return $this->render('recomendacion/index.html.twig', [
            'controller_name' => 'RecomendacionController',
        ]);
    }
}
