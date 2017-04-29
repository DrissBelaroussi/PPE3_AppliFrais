<?php

namespace FraisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ComptableType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder           
            ->add('login')
            ->add('mdp' , 'password')
            ->add('valider' , 'submit')
            ->add('annuler' , 'reset')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FraisBundle\Entity\Comptable'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fraisbundle_comptable';
    }
}
