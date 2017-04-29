<?php

namespace FraisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FichefraisType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
//        $builder
//                ->add('date', 'date' ,  array(
//                'format'          => 'dd-MM-yyyy',
//                'years'           => range(date('Y'), date('Y')-12),
//                'days'            => array(1),
//               
//            ) )
//                ->add('Valider', 'submit', array('attr' => array ('class' => "btn btn-lg btn-inverse" , 'style' => 'margin:5px')));
//        ;

        $builder->add(
                    'date', 'date', array(
                    'format' => 'dd MM yyyy',
                    'years' => range(date('Y'), date('Y') - 12),
                    'days' => array(1),
                    'empty_value' => array('year' => '----', 'month' => '----', 'day' => false)
                ))
                ->add('Valider', 'submit', array('attr' => array('class' => "btn btn-lg btn-inverse", 'style' => 'margin:5px')));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'FraisBundle\Entity\Fichefrais'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fraisbundle_comptable';
    }

    public function getYears() {
        $tab = array();

        for ($i = 2010; $i < 2026; $i++) {
            $tab["$i"] = $i + "";
        }

        return $tab;
    }

}
