<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * OrganizerType
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class OrganizerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('description', 'textarea', [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('phone', 'text', [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('email', 'email', [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('address', 'text', [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('submit', 'submit', [
                'attr' => [
                    'class' => 'btn btn-success',
                ]
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Organizer'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'organizer_type';
    }
}
