<?php

namespace FraisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VisiteurType extends AbstractType
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
            ->add('valider', 'submit',array('attr' => array ('class' => "btn btn-lg btn-inverse" , 'style' => 'margin:20px')));
            //->add('annuler' , 'reset')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FraisBundle\Entity\Visiteur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fraisbundle_visiteur';
    }
}
