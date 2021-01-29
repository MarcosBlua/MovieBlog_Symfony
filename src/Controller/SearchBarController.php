<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SearchBarController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     */
    public function index(): Response
    {
        return $this->render('search_bar/index.html.twig', [
            'controller_name' => 'SearchBarController',
        ]);
    }

    /**
     * @Route("/searchBar", name="searchBar")
     */
    public function searchBarAction(){
        $form = $this->createFormBuilder(null)
            ->setAction($this->generateUrl('handleSearch'))
            ->add('search', TextType::class)
        ->getForm();    

        return $this->render('search_bar/searchBar.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/handleSearch", name="handleSearch")
     */
    public function handleSearch(Request $request){
        $query = $request->request->get('form')['search'];

        $manager=$this->getDoctrine()->getManager();
        
        $form = $this->createForm(UserType::class,new User());

        try{
            $form->handleRequest($request);

            if($query){
                $user= $manager->getRepository(User::class)->findOneByUsername($query);
            }

            if($user==null){
                return $this->render('error.html.twig',
                    ['mensajeError' => 'No existe el usuario que ingreso.']
                );
            }else{
                return $this->redirectToRoute('perfil', ['username' => $user->getUsername()]);
            }
        }catch(\Exception $e){
            return $this->render('error.html.twig',
            ['mensajeError' => $e->getMessage()]
            );
        }
    }
}
