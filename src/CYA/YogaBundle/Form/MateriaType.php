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
use CYA\YogaBundle\Entity\Materia;
use CYA\YogaBundle\Entity\Curso;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class MateriaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //  ->add('curso', EntityType::class, array('class' => 'CYAYogaBundle:Curso','query_builder' => function (EntityRepository $er) 
            //         { return $er->createQueryBuilder('t')
            //             ->where('1 = 1')
                        
            //             ;},
            //         'choice_label' => 'curso',
            //         'placeholder'  => 'Seleccione un curso',
            //     ))
           
            ->add('titulo',TextType::class)
            ->add('comentario',TextType::class)
            ->add('save', SubmitType::class)
            ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CYA\YogaBundle\Entity\Materia'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cya_yogabundle_materia';
    }


}
