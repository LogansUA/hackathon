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
            ->add('name', 'text')
            ->add('description', 'textarea')
            ->add('phone', 'text')
            ->add('email', 'email')
            ->add('address', 'text')
            ->add('submit', 'submit');
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
