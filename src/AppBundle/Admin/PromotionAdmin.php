<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PromotionAdmin extends AbstractAdmin
{
    protected $translationDomain = 'app';

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title', null, array(
                    'label' => "promotion.title")
            )
            ->add('description', null, array(
                    'label' => "promotion.description")
            )
            ->add('promotion')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('title', null, array(
                    'label' => "promotion.title")
            )
            ->add('description', null, array(
                    'label' => "promotion.description")
            )
            ->add('promotion')
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
            ->add('title', null, array(
                    'label' => "promotion.title")
            )
            ->add('description')
            ->add('image', 'sonata_type_model_list', array(
                'label' => false,
                'required' => false,
                'btn_list' => false
            ))
            ->add('promotion', 'sonata_type_admin', array("label"=>false))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('title', null, array(
                    'label' => "promotion.title")
            )
            ->add('description', null, array(
                    'label' => "promotion.description")
            )
            ->end()
            ->with('Image liée')
                ->add('image', 'entity')
            ->end()
        ;
    }
}
