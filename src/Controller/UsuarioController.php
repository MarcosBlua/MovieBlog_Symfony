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
     * @Route("/perfil/{username}", name="verPerfil")
     */
    public function verPerfil(request $request, $username)
    {
        $manager=$this->getDoctrine()->getManager();
        
        $user= $manager->getRepository(User::class)->find($username);
        
        $form = $this->createForm(UserType::class,$user);
        $form->handleRequest($request);
        
        return $this->render('persona/verPerfil.html.twig',
                ['usuario' => $user]
            );
    }
}
