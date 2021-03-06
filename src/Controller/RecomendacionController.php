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

        try{
            $form->handleRequest($request);

            $user= $manager->getRepository(User::class)->findOneByUsername($username);

            $manager=$this->getDoctrine()->getManager();
            $form = $this->createForm(RecomendacionType::class,new RecomendacionPelicula());
            $form->handleRequest($request);
        
            $recomendaciones= $manager->getRepository(RecomendacionPelicula::class)->findBy(array('usuario' => $user->getId() ));
        
            return $this->render('recomendacion/listaRecomendaciones.html.twig',
                ['recomendaciones' => $recomendaciones, 'usuario' => $user]
            );
        }catch(\Exception $e){
            return $this->render('error.html.twig',
            ['mensajeError' => $e->getMessage()]
            );
        }
    }

    /**
     * @Route("/recomendacion/{id}", name="recomendacion")
     */
    public function recomendacion(request $request, $id)
    {
        $manager=$this->getDoctrine()->getManager();
        
        $form = $this->createForm(RecomendacionType::class,new RecomendacionPelicula());

        try{
            $form->handleRequest($request);

            $pelicula= $manager->getRepository(RecomendacionPelicula::class)->find($id);

            $form = $this->createForm(UserType::class,new User());
            $form->handleRequest($request);

            $user= $manager->getRepository(User::class)->find($pelicula->getUsuario());
        
            return $this->render('recomendacion/recomendacion.html.twig',
                ['pelicula' => $pelicula, 'usuario' => $user, 'favorito' => $pelicula->getFavoritoDeUsuario()->contains($this->getUser())]
            );
        }catch(\Exception $e){
            return $this->render('error.html.twig',
            ['mensajeError' => $e->getMessage()]
            );
        }
    }

    /**
     * @Route("/agregarRecomendacion", name="agregarRecomendacion")
     */
    public function agregarRecomendacion(Request $request): Response
    {
        $recomendacion = new RecomendacionPelicula();

        $formulario = $this->createForm(RecomendacionType::class,$recomendacion);

        try{
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
        }catch(\Exception $e){
            return $this->render('error.html.twig',
            ['mensajeError' => $e->getMessage()]
            );
        }
    }

    /**
     * @Route("/modificarRecomendacion/{id}", name="modificarRecomendacion")
     */
    public function modificarRecomendacion(Request $request, $id)
    {
        $manager=$this->getDoctrine()->getManager();
        
        try{
            $recomendacion= $manager->getRepository(RecomendacionPelicula::class)->find($id);
        
            $form = $this->createForm(RecomendacionType::class,$recomendacion);
            $form->handleRequest($request);
        
            if ($recomendacion->getUsuario() == $this->getUser()->getId()){
                if ($form->isSubmitted() && $form->isValid()){
            
                    $manager->flush();
                
                    return $this->redirectToRoute('listaRecomendaciones', ['username' => $this->getUser()->getUsername()]);
                
                }
            
                return $this->render('recomendacion/modificarRecomendacion.html.twig',
                    ['formulario' => $form->createView()]
                );
            }else{
                return $this->render('error.html.twig',
                    ['mensajeError' => 'No puede modificar recomendaciones de otro usuario.']
                );
            }
        }catch(\Exception $e){
            return $this->render('error.html.twig',
            ['mensajeError' => $e->getMessage()]
            );
        }       
    }

    /**
     * @Route("/eliminarRecomendacion/{id}", name="eliminarRecomendacion")
     */
    
    public function eliminarRecomendacion(Request $request, $id)
    {
        $manager=$this->getDoctrine()->getManager();
        
        $form = $this->createForm(RecomendacionType::class,new RecomendacionPelicula());

        try{
            $form->handleRequest($request);
        
            $recomendacion= $manager->getRepository(RecomendacionPelicula::class)->find($id);
       
            if ($recomendacion->getUsuario() == $this->getUser()->getId()){
                $manager->remove($recomendacion);
                $manager->flush();
        
                return $this->redirectToRoute('listaRecomendaciones', ['username' => $this->getUser()->getUsername()]);
            }else{
                return $this->render('error.html.twig',
                    ['mensajeError' => 'No puede eliminar recomendaciones de otro usuario.']
                );
            }
        }catch(\Exception $e){
            return $this->render('error.html.twig',
            ['mensajeError' => $e->getMessage()]
            );
        }   
        
        
    }

    /**
     * @Route("/marcarFavorito/{id}", name="marcarFavorito")
     */
    public function marcarFavorito(Request $request, $id)
    {
        $manager=$this->getDoctrine()->getManager();

        try{
            $recomendacion= $manager->getRepository(RecomendacionPelicula::class)->find($id);

            $user = $this->getUser();
        
            if ($recomendacion->getUsuario() != $user->getId()){ 
                $user->marcarFavorito($recomendacion);
                $recomendacion->marcarFavoritoDeUsuario($user);

                $manager->persist($recomendacion);
                $manager->flush();
                
                return $this->redirectToRoute('recomendacion', ['id' => $recomendacion->getId()]); 
            }else{
                return $this->render('error.html.twig',
                    ['mensajeError' => 'No puede marcar sus propias recomendaciones como favoritos.']
                );
            }
        }catch(\Exception $e){
            return $this->render('error.html.twig',
            ['mensajeError' => $e->getMessage()]
            );
        }
    }

    /**
     * @Route("/desmarcarFavorito/{id}", name="desmarcarFavorito")
     */
    public function desmarcarFavorito(Request $request, $id)
    {
        $manager=$this->getDoctrine()->getManager();

        try{
            $recomendacion= $manager->getRepository(RecomendacionPelicula::class)->find($id);

            $user = $this->getUser();
        
            if ($recomendacion->getUsuario() != $user->getId()){ 
                $user->desmarcarFavorito($recomendacion);
                $recomendacion->desmarcarFavoritoDeUsuario($user);

                $manager->persist($recomendacion);
                $manager->flush();
                
                return $this->redirectToRoute('recomendacion', ['id' => $recomendacion->getId()]); 
            }else{
                return $this->render('error.html.twig',
                    ['mensajeError' => 'No puede marcar sus propias recomendaciones como favoritos.']
                );
            }
        }catch(\Exception $e){
            return $this->render('error.html.twig',
            ['mensajeError' => $e->getMessage()]
            );
        }
    }

    /**
     * @Route("/listaFavoritos/{username}", name="listaFavoritos")
     */
    
    public function listaFavoritos(Request $request, $username)
    {
        $manager=$this->getDoctrine()->getManager();

        try{
            $user= $manager->getRepository(User::class)->findOneByUsername($username);
        
            return $this->render('recomendacion/listaFavoritos.html.twig',
                ['recomendaciones' => $user->getFavoritos(), 'usuario' => $user]
            );
        }catch(\Exception $e){
            return $this->render('error.html.twig',
            ['mensajeError' => $e->getMessage()]
            );
        }
    }
}
