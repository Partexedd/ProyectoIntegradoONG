<?php

namespace App\Form;

use App\Entity\PagMirant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class PagMirantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titCabecera')
            ->add('titMirant')
            ->add('descripcionMirant')
            ->add('cartelMirant')
            ->add('videoSpotMirant')
            ->add('send', SubmitType::Class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PagMirant::class,
        ]);
    }
}
