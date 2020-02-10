<?php

namespace App\Form;

use App\Entity\Contactar;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\{TextType, EmailType, TextareaType, HiddenType,  SubmitType, ChoiceType};

class EnvioContactoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::Class,  ['label' => 'Nombre'])
            ->add('email', EmailType::Class ,  ['label' => 'Email'])
            ->add('rssProvincia', ChoiceType::class, [
                'choices' => [
                    'RSS Castellón' => "rssc",
                    'RSS Valencia' => "rssv",
                    'RSS Alicante' => "rssa",
                ]])
            ->add('representa', ChoiceType::class, [
                'choices' => [
                    'Admnistración Pública' => "administracionPublica",
                    'Asociación' => "asociacion",
                    'ONG/ONGD' => "ong_d",
                    'Colegio Profesional' => "colegioProfesional",
                    'Universidades' => "universidades",
                    'Otra' => "otra",
                ]])
            ->add('asunto', TextType::Class,  ['label' => 'Asunto'])
            ->add('mensaje', TextareaType::Class,  ['label' => 'Mensaje'])
            ->add('date', HiddenType::Class, ['mapped' => false])
            ->add('send', SubmitType::Class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contactar::class,
        ]);
    }
}
