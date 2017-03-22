<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PromotionNewAdmin extends AbstractAdmin
{
    protected $translationDomain = 'app';

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('discount', null, array(
                'label' => "promotion.discount"))
            ->add('startDate', null, array(
                'label' => "promotion.startdate"))
            ->add('endDate', null, array(
                'label' => "promotion.enddate"))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('discount', null, array(
                'label' => "promotion.discount"))
            ->add('startDate', null, array(
                'label' => "promotion.startdate"))
            ->add('endDate', null, array(
                'label' => "promotion.enddate"))
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
                'label' => "promotion.discount", "help"=>"Exemple: -15%, -20€"))
            ->add('startDate','sonata_type_date_picker' , array(
        'label' => "promotion.startdate", 'format' => 'dd-MM-yyyy', "required"=>false
    ))
            ->add('endDate', 'sonata_type_date_picker' , array(
                'label' => "promotion.enddate", 'format' => 'dd-MM-yyyy', "required"=>false
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
                'label' => "promotion.discount"))
            ->add('startDate', null, array(
                'label' => "promotion.startdate"))
            ->add('endDate', null, array(
                'label' => "promotion.enddate"))
        ;
    }
}
