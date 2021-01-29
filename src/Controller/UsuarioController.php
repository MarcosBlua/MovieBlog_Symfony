<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsuarioController extends AbstractController
{
    private $passwordEncoder;

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

        try{
            $form->handleRequest($request);

            $user= $manager->getRepository(User::class)->findOneByUsername($username);
        
            return $this->render('usuario/verPerfil.html.twig',
                ['usuario' => $user]
            );
        }catch(\Exception $e){
            return $this->render('error.html.twig',
            ['mensajeError' => $e->getMessage()]
            );
        }
    }

    /**
     * @Route("/modificarUsuario/{id}", name="modificarUsuario")
     */
    
    public function modificarUsuario(Request $request, $id, UserPasswordEncoderInterface $passwordEncoder)
    {
        $manager=$this->getDoctrine()->getManager();
        
        $usuario= $manager->getRepository(User::class)->find($id);
        
        $form = $this->createForm(UserType::class,$usuario);

        try{
            $form->handleRequest($request);

            if($usuario->getId() == $this->getUser()->getId()){
                if ($form->isSubmitted() && $form->isValid()){
                    
                    $usuario->setPassword($passwordEncoder->encodePassword($usuario,$form['password']->getData()));
                    $manager = $this->getDoctrine()->getManager();
                    $manager->persist($usuario);
                    $manager->flush();
                
                    return $this->redirectToRoute('perfil', ['username' => $usuario->getUsername()]);
                
                }
            
                return $this->render('Usuario/modificarUsuario.html.twig',
                    ['formulario' => $form->createView()]
                );
            }else{
                return $this->render('error.html.twig',
                ['mensajeError' => 'No puede modificar los datos de otro usuario.']
                );
            }
        }catch(\Exception $e){
            return $this->render('error.html.twig',
            ['mensajeError' => $e->getMessage()]
            );
        }
    }
}
