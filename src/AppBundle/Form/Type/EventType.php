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
            ->add('name', 'text')
            ->add('latitude', 'text')
            ->add('longitude', 'text')
            ->add('description', 'textarea')
            ->add('price', 'text')
            ->add('datetime', 'datetime')
            ->add('submit', 'submit');
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
