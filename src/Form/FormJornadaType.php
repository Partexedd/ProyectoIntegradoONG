<?php

namespace App\Form;

use App\Entity\FormJornada;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class FormJornadaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('primerApellido')
            ->add('segundoApellido')
            ->add('DNI')
            ->add('telefono')
            ->add('email')
            ->add('provincia', ChoiceType::class, [
                'choices' => [
                    'Castellón' => "Castellón",
                    'Valencia' => "Valencia",
                    'Alicante' => "Alicante",
                ]])
            ->add('entidad', ChoiceType::class, [
                'choices' => [
                    'Castellón' => "Castellón",
                    'Valencia' => "Valencia",
                    'Alicante' => "Alicante",
                ]])

            ->add('cargo', ChoiceType::class, [
                'choices' => [
                    'Castellón' => "Castellón",
                    'Valencia' => "Valencia",
                    'Alicante' => "Alicante",
                ]])
            ->add('entidadajena')
            ->add('certficado')
            ->add('profesion')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FormJornada::class,
        ]);
    }
}
