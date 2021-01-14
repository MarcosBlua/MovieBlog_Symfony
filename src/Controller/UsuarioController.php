<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\UserType;

class UsuarioController extends AbstractController
{
    /**
     * @Route("/usuario", name="usuario")
     */
    public function index(): Response
    {
        return $this->render('usuario/index.html.twig', [
            'controller_name' => 'UsuarioController',
        ]);
    }

    /**
     * @Route("/perfil/{username}", name="perfil")
     */
    public function verPerfil(request $request, $username)
    {
        $manager=$this->getDoctrine()->getManager();
        
        $form = $this->createForm(UserType::class,new User());
        $form->handleRequest($request);

        $user= $manager->getRepository(User::class)->findOneByUsername($username);
        
        return $this->render('usuario/verPerfil.html.twig',
                ['usuario' => $user]
            );
    }

    /**
     * @Route("/modificarUsuario/{id}", name="modificarUsuario")
     */
    
    public function modificarUsuario(Request $request, $id)
    {
        $manager=$this->getDoctrine()->getManager();
        
        $usuario= $manager->getRepository(User::class)->find($id);
        
        $form = $this->createForm(UserType::class,$usuario);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            
            $manager->flush();
            
            return $this->redirectToRoute('perfil', ['username' => $usuario->getUsername()]);
            
        }
        
        return $this->render('Usuario/modificarUsuario.html.twig',
                ['formulario' => $form->createView()]
            );
    }
}
