<?php

namespace CYA\YogaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use CYA\YogaBundle\Entity\Cursada;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CursadaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

        //   ->add('nota', ChoiceType::class, array('choices' => array(
        //       'EXCELENTE' => 'EXCELENTE', 
        //       'MUY BUENO' => 'MUY BUENO', 
        //       'BUENO' => 'BUENO', 
        //       'NO APROBADO' => 'NO APROBADO',
        //       'EN CURSO' => 'EN CURSO'
        //       ), 
        //       'placeholder' => 'SELECCIONE UNA NOTA'))
            ->add('comentario',TextType::class)
            // ->add('fechains', DateType::class, array('widget' => 'single_text','attr' => ['class' => 'js-datepicker'],))
            ->add('save', SubmitType::class)
            ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CYA\YogaBundle\Entity\Cursada'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cya_yogabundle_cursada';
    }


}
