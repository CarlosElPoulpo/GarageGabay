<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PromotionNewAdmin extends AbstractAdmin
{

    private $label_discount = "Remise";
    private $label_startDate = "Date de début";
    private $label_endDate = "Date de fin";

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('discount', null, array(
                'label' => $this->label_discount))
            ->add('startDate', null, array(
                'label' => $this->label_startDate))
            ->add('endDate', null, array(
                'label' => $this->label_endDate))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('discount', null, array(
                'label' => $this->label_discount))
            ->add('startDate', null, array(
                'label' => $this->label_startDate))
            ->add('endDate', null, array(
                'label' => $this->label_endDate))
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
            ->add('discount', null, array(
                'label' => $this->label_discount, "help"=>"Exemple: -15%, -20€"))
            ->add('startDate','sonata_type_date_picker' , array(
        'label' => $this->label_startDate, 'format' => 'dd-MM-yyyy', "required"=>false
    ))
            ->add('endDate', 'sonata_type_date_picker' , array(
                'label' => $this->label_endDate, 'format' => 'dd-MM-yyyy', "required"=>false
            ))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('discount', null, array(
                'label' => $this->label_discount))
            ->add('startDate', null, array(
                'label' => $this->label_startDate))
            ->add('endDate', null, array(
                'label' => $this->label_endDate))
        ;
    }
}
