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
            ->add('txtdef')
            ->add('image1')
            ->add('file1', 'file', array('label' => 'Inserer/modifier la premère image de l accordéon', 'required' => false))
            ->add('titleWho')
            ->add('txtWho')
            ->add('image2')
            ->add('file2', 'file', array('label' => 'Inserer/modifier la deuxiéme image de l accordéon', 'required' => false))
            ->add('titleWhy')
            ->add('txtWhy')
            ->add('image3')
            ->add('file3', 'file', array('label' => 'Inserer/modifier la troiséme image de l accordéon', 'required' => false))
            ->add('titlePsy')
            ->add('txtPsy1')
            ->add('image4')
            ->add('file4', 'file', array('label' => 'Inserer/modifier la premiére image de la biographie', 'required' => false))
            ->add('txtPsy2')
            ->add('image5')
            ->add('file5', 'file', array('label' => 'Inserer/modifier la deuxiéme image de la biographie', 'required' => false))
            ->add('titleConsult')
            ->add('txtConsult')
            ->add('titleInterv')
            ->add('txtInterv')
            ->add('titleBilan')
            ->add('txtBilan')
            ->add('namePsy1')
            ->add('namePsy2')
            ->add('contactAddress')
            ->add('contactMail')
            ->add('contactTel')
            ->add('contactName');

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
