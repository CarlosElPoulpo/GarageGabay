<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EmployeeAdmin extends AbstractAdmin
{

    protected $translationDomain = 'app';

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name', null, array('label'=>"employee.name"))
            ->add('lastname', null, array('label'=>"employee.lastname"))
            ->add('jobTitle', null, array('label'=>"employee.jobtitle"))
            ->add('description', null, array('label'=>"employee.description"))
            ->add('arrange', null, array('label'=>"employee.arrange"))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        unset($this->listModes['mosaic']);
        $listMapper
            ->add('name', null, array('label'=>"employee.name"))
            ->add('lastname', null, array('label'=>"employee.lastname"))
            ->add('image', null, array('label'=>"employee.image"))
            ->add('jobTitle', null, array('label'=>"employee.jobtitle"))
            ->add('description', null, array('label'=>"employee.description"))
            ->add('arrange', null, array('label'=>"employee.arrange"))
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
            ->add('name', null, array('label'=>"employee.name"))
            ->add('lastname', null, array('label'=>"employee.lastname"))
            ->add('image', 'sonata_type_model_list', array(
                'label' => "employee.image",
                'required' => false,
                'btn_list' => false,
            ))
            ->add('jobTitle', null, array('label'=>"employee.jobtitle"))
            ->add('description', null, array('label'=>"employee.description"))
            ->add('arrange', null, array('label'=>"employee.arrange"))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name', null, array('label'=>"employee.name"))
            ->add('lastname', null, array('label'=>"employee.lastname"))
//            ->add('image', null, array(
//                'label'=>"employee.image,
            ->add('image', null, array(
                'template' => 'ImageBundle:admin:image_preview_embedded.html.twig'
            ))
            ->add('jobTitle', null, array('label'=>"employee.jobtitle"))
            ->add('description', null, array('label'=>"employee.description"))
            ->add('arrange', null, array('label'=>"employee.arrange"))
        ;
    }
}
