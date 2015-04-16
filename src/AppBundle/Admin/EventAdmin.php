<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

/**
 * Event Entity Admin
 */
class EventAdmin extends Admin
{

    /**
     * {@inheritdoc}
     */
    protected $baseRoutePattern = 'event';

    /**
     * {@inheritdoc}
     */
    protected $baseRouteName = 'admin_event';

    /**
     * {@inheritdoc}
     */
    public function getBatchActions()
    {
        $actions = parent::getBatchActions();

        $actions['enable_action']  = [
            'label'            => 'Enable',
            'ask_confirmation' => true
        ];

        $actions['disable_action'] = [
            'label'            => 'Disable',
            'ask_confirmation' => true
        ];

        return $actions;
    }

    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('description')
            ->add('datetime')
            ->add('latitude')
            ->add('longitude')
            ->add('price')
            ->add('free');
    }

    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('name')
            ->add('description')
            ->add('datetime')
            ->add('latitude')
            ->add('longitude')
            ->add('price')
            ->add('free');
    }

    /**
     * {@inheritdoc}
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('name')
            ->add('description')
            ->add('datetime')
            ->add('latitude')
            ->add('longitude')
            ->add('price')
            ->add('free');
    }

    /**
     * {@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('description')
            ->add('datetime')
            ->add('latitude')
            ->add('longitude')
            ->add('price')
            ->add('free');
    }
}
