<?php

namespace AppBundle\Form\AccessControl;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BenutzerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', null, array(
                "mapped" => false
            ))
            ->add('email')
            ->add('benutzername')
            ->add('passwort')
            ->add('resetToken')
            ->add('emailTmp')
            ->add('vorname')
            ->add('nachname')
            ->add('geschlecht')
            ->add('istAktiv', ChoiceType::class, array(
                'choices'  => array(
                    '0' => false,
                    '1' => true
                ),
            ))
            ->add('ersterLogin')
            ->add('ablaufdatum')
            ->add('createdBy')
            ->add('updatedBy')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('rolle', EntityType::class, array(
                'class' => 'AppBundle:AccessControl:Rolle',
                'choice_label' => 'name',
                'expanded' => true,
                'multiple' => true
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\AccessControl\Benutzer'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'benutzer';
    }
}
