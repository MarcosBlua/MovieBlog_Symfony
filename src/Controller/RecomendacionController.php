<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\RecomendacionPelicula;
use App\Form\RecomendacionType;
use App\Entity\User;
use App\Form\UserType;

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

    /**
     * @Route("/listaRecomendaciones/{username}", name="listaRecomendaciones")
     */
    
    public function listaRecomendaciones(Request $request, $username)
    {
        $manager=$this->getDoctrine()->getManager();
        
        $form = $this->createForm(UserType::class,new User());
        $form->handleRequest($request);

        $user= $manager->getRepository(User::class)->findOneByUsername($username);

        $manager2=$this->getDoctrine()->getManager();
        $form2 = $this->createForm(RecomendacionType::class,new RecomendacionPelicula());
        $form2->handleRequest($request);
        
        $recomendaciones= $manager2->getRepository(RecomendacionPelicula::class)->findBy(array('usuario' => $user->getId() ));
        
        return $this->render('recomendacion/listaRecomendaciones.html.twig',
                ['recomendaciones' => $recomendaciones, 'usuario' => $user]
            );
    }

    /**
     * @Route("/pelicula/{id}", name="pelicula")
     */
    public function pelicula(request $request, $id)
    {
        $manager=$this->getDoctrine()->getManager();
        
        $form = $this->createForm(RecomendacionType::class,new RecomendacionPelicula());
        $form->handleRequest($request);

        $pelicula= $manager->getRepository(RecomendacionPelicula::class)->find($id);
        
        return $this->render('recomendacion/pelicula.html.twig',
                ['pelicula' => $pelicula]
            );
    }
}
