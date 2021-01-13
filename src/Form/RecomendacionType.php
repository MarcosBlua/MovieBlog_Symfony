<?php

namespace App\Form;

use App\Entity\RecomendacionPelicula;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RecomendacionPelicula::class,
        ]);
    }
}
