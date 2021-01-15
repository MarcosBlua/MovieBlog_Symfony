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
     * @Route("/recomendacion/{id}", name="recomendacion")
     */
    public function recomendacion(request $request, $id)
    {
        $manager=$this->getDoctrine()->getManager();
        
        $form = $this->createForm(RecomendacionType::class,new RecomendacionPelicula());
        $form->handleRequest($request);

        $pelicula= $manager->getRepository(RecomendacionPelicula::class)->find($id);
        
        return $this->render('recomendacion/recomendacion.html.twig',
                ['pelicula' => $pelicula]
            );
    }

    /**
     * @Route("/agregarRecomendacion", name="agregarRecomendacion")
     */
    public function agregarRecomendacion(Request $request): Response
    {
        $recomendacion = new RecomendacionPelicula();

        $formulario = $this->createForm(RecomendacionType::class,$recomendacion);

        $formulario -> handleRequest($request);

        if ($formulario->isSubmitted() && $formulario->isValid()){
            
            $entManager = $this->getDoctrine()->getManager();
            $recomendacion->setUsuario($this->getUser());
            $entManager->persist($recomendacion);
            $entManager->flush();
            return $this->render('recomendacion/success.html.twig',
		    ['recomendacion' => $recomendacion]
           );
        }

        return $this->render('recomendacion/agregarRecomendacion.html.twig', [
            'formulario' => $formulario->createView()
        ]);
    }
}
