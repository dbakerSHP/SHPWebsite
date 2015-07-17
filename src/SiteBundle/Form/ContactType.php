<?php

namespace SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fullName', 'text', array(
                'attr' => array(
                    'pattern'       => '.{2,}', //minlength
                )
            ))
            ->add('email', 'email')
            ->add('phone', 'text', array(
                'attr' => array(
                    'pattern'       => '.{2,}', //minlength
                )
            ))
            ->add('message', 'textarea', array(
                'attr' => array(
                    'rows' => 4,
                )
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'        => 'SiteBundle\Entity\Contact',
            'csrf_protection'   => true,
            'csrf_field_name'   => '_token',
            'intention'         => 'contact_shp',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sitebundle_contact';
    }
}
