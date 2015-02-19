<?php

namespace Win8\EnrolBundle\Form;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\AbstractType;
use Win8\EnrolBundle\Entity\Termin;
use Symfony\Component\Form\FormBuilderInterface;
use Win8\EnrolBundle\Form\RegisterRepository;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EnrolType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    private $data;
    public  function __construct($data)
    {
        $this->data=$data;

    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('firstname','text',array('label' => 'Imię:','attr'      => array('class' => 'adjust')))
            ->add('surname','text',array('label' => 'Nazwisko:    ','attr'      => array('class' => 'adjust')))
            ->add('department','text',array('label' => 'Dział:    ','attr'      => array('class' => 'adjust')))
            ->add('terminCourse', 'entity', array(
                'class'       => 'Win8EnrolBundle:Termin',
                'placeholder' => '',
                'choices'     => $this->data,
                'label'       =>'Termin kursu:',
                'attr'      => array('class' => 'adjust')
            ))
            /*->add('save', 'submit', array(
                'label' => 'Zapisz'))*/
        ;
        /*
        $form->add('position', 'entity', array(
            'class'       => 'AppBundle:Position',
            'placeholder' => '',
            'choices'     => null,
        ));*/
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Win8\EnrolBundle\Entity\Register'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'win8_enrolbundle_register';
    }
}
