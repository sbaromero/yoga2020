<?php

namespace CYA\YogaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use CYA\YogaBundle\Entity\Proveedor;


class ProveedorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',TextType::class)
            ->add('mail',TextType::class)
            ->add('telefono',TextType::class)
            ->add('tipo', ChoiceType::class, array('choices' => array(
              'PROFESOR' => 'PROFESOR', 
              'OTRO' => 'OTRO'
              ), 
              'placeholder' => 'Tipo de Proveedor'))
            ->add('save', SubmitType::class)  
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CYA\YogaBundle\Entity\Proveedor'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cya_yogabundle_proveedor';
    }


}
