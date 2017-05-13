<?php

namespace FraisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FraishorsforfaitType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle')
            ->add('date')
            ->add('montant')
            ->add('Valider', 'submit', array('attr' => array ('class' => "btn btn-lg btn-inverse" , 'style' => 'margin:5px')));
        
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FraisBundle\Entity\Fraishorsforfait'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fraisbundle_fraishorsforfait';
    }
}
