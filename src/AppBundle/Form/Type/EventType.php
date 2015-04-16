<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * EventType
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class EventType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text',[
                    'attr' => [
                        'class' => 'form-control'
                    ]
                ])
            ->add('latitude', 'text',[
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('longitude', 'text',[
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('description', 'textarea',[
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('price', 'text',[
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('datetime', 'datetime',[
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('submit', 'submit',[
                'attr' => [
                    'class' => 'btn-success'
                ]
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Event'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'event_type';
    }
}
