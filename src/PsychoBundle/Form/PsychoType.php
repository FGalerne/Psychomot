<?php

namespace PsychoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PsychoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tel')
            ->add('titledef')
            ->add('txtdef', 'textarea', array('attr' => array('rows' => '15')))
            ->add('image1')
            ->add('file1', 'file', array('required' => false))
            ->add('titleWho')
            ->add('txtWho',  'textarea', array('attr' => array('rows' => '15')))
            ->add('image2')
            ->add('file2', 'file', array('required' => false))
            ->add('titleWhy')
            ->add('txtWhy',  'textarea', array('attr' => array('rows' => '15')))
            ->add('image3')
            ->add('file3', 'file', array('required' => false))
            ->add('titlePsy')
            ->add('txtPsy1',  'textarea', array('attr' => array('rows' => '15')))
            ->add('image4')
            ->add('file4', 'file', array('required' => false))
            ->add('txtPsy2',  'textarea', array('attr' => array('rows' => '15')))
            ->add('image5')
            ->add('file5', 'file', array('required' => false))
            ->add('titleConsult')
            ->add('txtConsult',  'textarea', array('attr' => array('rows' => '15')))
            ->add('titleInterv')
            ->add('txtInterv',  'textarea', array('attr' => array('rows' => '15')))
            ->add('titleBilan')
            ->add('txtBilan',  'textarea', array('attr' => array('rows' => '15')))
            ->add('namePsy1')
            ->add('namePsy2')
            ->add('contactAddress')
            ->add('contactTel')
            ->add('contactName')
            ->add('image6')
            ->add('file6', 'file', array('required' => false));

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PsychoBundle\Entity\Psycho'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'psychobundle_psycho';
    }


}
