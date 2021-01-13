<?php

namespace App\Form;

use App\Entity\RecomendacionPelicula;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RecomendacionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('imagenSRC')
            ->add('sinopsis')
            ->add('anio')
            ->add('generos')
            ->add('director')
            ->add('elenco')
            ->add('trailer')
            ->add('descarga')
            ->add('Aceptar', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RecomendacionPelicula::class,
        ]);
    }
}
