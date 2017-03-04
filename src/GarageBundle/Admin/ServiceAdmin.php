<?php

namespace GarageBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ServiceAdmin extends AbstractAdmin
{
    private $label_name = "Nom du service";
    private $label_icon = "Icône";
    private $label_price = "Prix";
    private $label_promotion = "Promotion";

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name', null, array('label'=>$this->label_name))
            ->add('icon', null, array('label'=>$this->label_icon))
            ->add('price', null, array('label'=>$this->label_price))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        unset($this->listModes['mosaic']);
        $listMapper
            ->add('name', null, array('label'=>$this->label_name))
            ->add('icon', null, array('label'=>$this->label_icon))
            ->add('price', null, array('label'=>$this->label_price))
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
            ->add('name', null, array('label'=>$this->label_name))
            ->add('price', null, array('label'=>$this->label_price))
            ->add('icon', 'sonata_type_model_list', array(
                'label' => $this->label_icon,
                'btn_list' => false))
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
            ->add('name', null, array('label'=>$this->label_name))
            ->add('icon', null, array('label'=>$this->label_icon))
            ->add('price', null, array('label'=>$this->label_price))
        ;
    }
}
