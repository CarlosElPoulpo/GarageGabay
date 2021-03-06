<?php

namespace GarageBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ServiceAdmin extends AbstractAdmin
{
    protected $translationDomain = 'garage';

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name', null, array('label'=>"service.name"))
            ->add('price', null, array('label'=>"service.price"))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        unset($this->listModes['mosaic']);
        $listMapper
            ->add('icon', null, array("label"=>"service.icon", 'template' => ':admin:list_icon_for_service.html.twig'))
            ->add('name', null, array('label'=>"service.name"))
            ->add('price', null, array('label'=>"service.price"))
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
            ->with("Général")
            ->add('name', null, array('label'=>"service.name"))
            ->add('price', null, array('label'=>"service.price"))
            ->add('icon', 'sonata_type_model_list', array(
                'label' => "service.icon",
                'btn_list' => false, 'help'=>" <a href='http://www.flaticon.com/packs/mechanic-elements-5' target='_blank'>Rechercher un icon sur Flat Icon</a>"))
            ->end()
            ->with("Faire une promotion")
                ->add('promotion', 'sonata_type_model_list', array('label'=>false, "required"=>false, 'btn_list' => false,))
            ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name', null, array('label'=>"service.name"))
            ->add('icon', null, array('label'=>"service.icon"))
            ->add('price', null, array('label'=>"service.price"))
        ;
    }
}
