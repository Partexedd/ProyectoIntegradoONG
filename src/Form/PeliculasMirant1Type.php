<?php

namespace App\Form;

use App\Entity\PeliculasMirant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\{TextType, SubmitType, ChoiceType, FileType};
class PeliculasMirant1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titPelicula', TextType::Class,  ['label' => 'titulo'])
            ->add('fotoPelicula', TextType::class, ['label'=>'Upload Image'])
            ->add('trailerPelicula', TextType::Class,  ['label' => 'trailer'])
            ->add('edicion')
            ->add('send', SubmitType::Class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PeliculasMirant::class,
        ]);
    }
}
