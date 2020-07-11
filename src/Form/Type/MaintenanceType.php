<?php
declare(strict_types=1);

namespace Wkdks\SyliusExamplePlugin\Form\Type;

use Wkdks\SyliusExamplePlugin\Entity\Configuration;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MaintenanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array(
                'attr' => array('class' => 'form-control')))
            ->add('short_description', TextareaType::class, array(
                'attr' => array('class' => 'form-control')))
            ->add('description', TextareaType::class, array(
                'attr' => array('class' => 'form-control')))
            ->add('status', ChoiceType::class, array(
                'attr' => array('class' => 'form-control'),
                'choices'  => array(
                    'Enable' => true,
                    'Disable' => false,
                ),
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Configuration::class,
        ));
    }
}
