<?php

namespace App\Form;

use App\Entity\PagEntidades;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class PagEntidadesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titCabecera')
            ->add('comunidad')
            ->add('tipo')
            ->add('nombre')
            ->add('logo')
            ->add('localizacionMaps')
            ->add('correo')
            ->add('telefono')
            ->add('descripcion')
            ->add('send', SubmitType::Class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PagEntidades::class,
        ]);
    }
}
