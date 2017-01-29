<?php

namespace GarageBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CarAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('title')
            ->add('brand')
            ->add('model')
            ->add('year')
            ->add('price')
            ->add('creationDate')
            ->add('pricePerMonth')
            ->add('gear')
            ->add('fuel')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        unset($this->listModes['mosaic']);
        $listMapper
            ->add('id')
            ->add('title')
            ->add('brand')
            ->add('model')
            ->add('year')
            ->add('price')
            ->add('creationDate')
            ->add('pricePerMonth')
            ->add('gear')
            ->add('fuel')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id')
            ->add('title')
            ->add('brand')
            ->add('model')
            ->add('year')
            ->add('price')
            ->add('creationDate')
            ->add('pricePerMonth')
            ->add('gear')
            ->add('fuel')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('title')
            ->add('brand')
            ->add('model')
            ->add('year')
            ->add('price')
            ->add('creationDate')
            ->add('pricePerMonth')
            ->add('gear')
            ->add('fuel')
        ;
    }
}
