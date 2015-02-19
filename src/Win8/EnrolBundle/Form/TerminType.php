<?php

namespace Win8\EnrolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TerminType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datefrom','date',array('input'=>'datetime','label'=> 'Data rozpoczęcia kursu'))
            ->add('dateto','date',array('input'=>'datetime','label'=>'Data zakończenie kursu'))
            ->add('availableplaceno',null,array('label'=>'Liczba osób'))
            /*->add('save', 'submit', array(
                'label' => 'Zapisz'))*/
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Win8\EnrolBundle\Entity\Termin'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'win8_enrolbundle_termin';
    }
}
