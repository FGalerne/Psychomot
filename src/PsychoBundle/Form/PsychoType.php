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
        $builder->add('tel')->add('titledef')->add('txtdef')->add('titleWho')->add('txtWho')->add('titleWhy')->add('txtWhy')->add('titlePsy')->add('txtPsy1')->add('txtPsy2')->add('titleConsult')->add('txtConsult')->add('titleInterv')->add('txtInterv')->add('titleBilan')->add('txtBilan')->add('namePsy1')->add('namePsy2')->add('contactAdr')->add('contactAddress')->add('contactMail')->add('contactTel')->add('contactName')        ;
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
