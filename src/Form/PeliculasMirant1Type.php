<?php

namespace App\Form;

use App\Entity\PeliculasMirant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PeliculasMirant1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titPelicula')
            ->add('trailerPelicula')
            ->add('fotoPelicula')
            ->add('edicion')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PeliculasMirant::class,
        ]);
    }
}
