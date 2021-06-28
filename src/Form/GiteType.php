<?php

namespace App\Form;

use App\Entity\Gite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class GiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'Name',
                TextType::class,
                [
                    'required' => false,
                    'label' => 'Nom du gite',
                    'attr' => [
                        'placeholder' => 'Entrer le nom du gite',
                    ]
                ]
            )
            ->add(
                'Description',
                TextareaType::class,
                [
                    'required' => false,
                    'label' => 'Description du gite',
                    'attr' => [
                        'placeholder' => 'Entrer une description du gite',
                    ]
                ]
            )
            ->add(
                'Surface',
                NumberType::class,
                [
                    'required' => false,
                    'label' => 'Surface',
                    'attr' => [
                        'placeholder' => 'Entrer la surface du gite',
                    ]
                ]
            )
            ->add(
                'Bedrooms',
                NumberType::class,
                [
                    'required' => false,
                    'label' => 'Nombre de chambres',
                    'attr' => [
                        'placeholder' => 'Entrer le nombre de chambres',
                    ]
                ]
            )
            ->add(
                'Adress',
                TextType::class,
                [
                    'required' => false,
                    'label' => 'Adresse du gite',
                    'attr' => [
                        'placeholder' => 'Entrer l\'adresse du gite',
                    ]
                ]
            )
            ->add(
                'City',
                TextType::class,
                [
                    'required' => false,
                    'label' => 'Ville',
                    'attr' => [
                        'placeholder' => 'Entrer le nom de la ville',
                    ]
                ]
            )
            ->add(
                'Postal_code',
                TextType::class,
                [
                    'required' => false,
                    'label' => 'Code postal',
                    'attr' => [
                        'placeholder' => 'Entrer le code postal',
                    ]
                ]
            )
            ->add(
                'Animals',
                CheckboxType::class,
                [
                    'required' => false,
                    'label' => 'Animaux accepté',
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Gite::class,
        ]);
    }
}
