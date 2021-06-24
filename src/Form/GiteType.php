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
            ->add('Name', TextType::class, 
            ['required' => false ])
            ->add('Description', TextareaType::class, 
            ['required' => false ])
            ->add('Surface', NumberType::class, 
            ['required' => false ])
            ->add('Bedrooms', NumberType::class, 
            ['required' => false ])
            ->add('Adress', TextType::class, 
            ['required' => false ])
            ->add('City', TextType::class, 
            ['required' => false ])
            ->add('Postal_code', TextType::class, 
            ['required' => false ])
            ->add('Animals', CheckboxType::class, 
            ['required' => false ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Gite::class,
        ]);
    }
}
