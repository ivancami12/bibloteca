<?php

// src/Form/NuevaRecomendacionType.php
namespace App\Form;

use App\Entity\Libro;
use App\Entity\Usuario;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class NuevaRecomendacionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libro', EntityType::class, [
                'class' => Libro::class,
                'choice_label' => 'titulo', // Mostrar el título del libro en el desplegable
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('l')
                        ->orderBy('l.titulo', 'ASC');
                },
                'label' => 'Libro', // Etiqueta más adecuada
                'attr' => ['class' => 'form-control'], // Aplicar clase Bootstrap
            ])
            ->add('contenido', TextType::class, [
                'label' => 'Contenido de la Opinión',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Escribe tu opinión aquí'], // Aplicar clase Bootstrap
            ])
            ->add('usuario', EntityType::class, [
                'class' => Usuario::class,
                'choice_label' => 'nombre', // Mostrar el nombre del usuario en el desplegable
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.nombre', 'ASC');
                },
                'label' => 'Usuario',
                'attr' => ['class' => 'form-control'], // Aplicar clase Bootstrap
            ]);
            
    }
}

