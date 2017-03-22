<?php

namespace GarageBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class GarageAdmin extends AbstractAdmin
{
    protected $translationDomain = 'garage';

    public function getDashboardActions()
    {
        $actions = parent::getDashboardActions();
        unset($actions['list']);
        $actions['modify'] = array(
            'label'              => ' Modifier',
            'url'                => $this->generateUrl('modify'),
            'icon'               => 'edit',
        );
        return $actions;
    }

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('modify')->remove('create')->remove('delete');
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {

    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        unset($this->listModes['mosaic']);
        $listMapper
            ->add('name', null, array('label'=>"garage.name"))
            ->add('image', null, array('label'=>"garage.image"))
            ->add('description', null, array('label'=>"garage.description"))
            ->add('roadNumber', null, array('label'=>"garage.roadnumber"))
            ->add('road', null, array('label'=>"garage.road"))
            ->add('city', null, array('label'=>"garage.city"))
            ->add('postalCode', null, array('label'=>"garage.postalcode"))
            ->add('phone', null, array('label'=>"garage.phone"))
            ->add('email', null, array('label'=>"garage.email"))
            ->add('facebookPageLink', null, array('label'=>"garage.facebookpagelink"))
            ->add('googlePageLink', null, array('label'=>"garage.googlepagelink"))
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
            ->with('Informations générales', array(
                'class'       => 'col-md-6',
            ))
                ->add('name', null, array('label'=>"garage.name"))
                ->add('image', null, array('label'=>"garage.image"))
                ->add('description', null, array('label'=>"garage.description"))
            ->end()
            ->with('Informations de contact', array(
                'class'       => 'col-md-6',
            ))
                ->add('roadNumber', null, array('label'=>"garage.roadnumber"))
                ->add('road', null, array('label'=>"garage.road"))
                ->add('city', null, array('label'=>"garage.city"))
                ->add('postalCode', null, array('label'=>"garage.postalcode"))
                ->add('phone', null, array('label'=>"garage.phone"))
                ->add('email', null, array('label'=>"garage.email"))
                ->add('facebookPageLink', null, array('label'=>"garage.facebookpagelink"))
                ->add('googlePageLink', null, array('label'=>"garage.googlepagelink"))
            ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name', null, array('label'=>"garage.name"))
            ->add('image', null, array('label'=>"garage.image"))
            ->add('description', null, array('label'=>"garage.description"))
            ->add('roadNumber', null, array('label'=>"garage.roadnumber"))
            ->add('road', null, array('label'=>"garage.road"))
            ->add('city', null, array('label'=>"garage.city"))
            ->add('postalCode', null, array('label'=>"garage.postalcode"))
            ->add('phone', null, array('label'=>"garage.phone"))
            ->add('email', null, array('label'=>"garage.email"))
            ->add('facebookPageLink', null, array('label'=>"garage.facebookpagelink"))
            ->add('googlePageLink', null, array('label'=>"garage.googlepagelink"))
        ;
    }
}
