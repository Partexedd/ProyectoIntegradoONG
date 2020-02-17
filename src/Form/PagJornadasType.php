<?php

namespace App\Form;

use App\Entity\PagJornadas;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\{SubmitType, DateTimeType};
class PagJornadasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titCabecera')
            ->add('titPonente')
            ->add('fotoPonente')
            ->add('descPonente')
            ->add('fechaPonenteV', DateTimeType::Class )
            ->add('fechaPonenteA')
            ->add('fechaPonenteC')
            ->add('cartelPonenteV')
            ->add('cartelPonenteA')
            ->add('cartelPonenteC')
            ->add('send', SubmitType::Class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PagJornadas::class,
        ]);
        
    }
}
