<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EmployeeAdmin extends AbstractAdmin
{

    private $label_name = "Prénom";
    private $label_lastname = "Nom";
    private $label_image = "Photo";
    private $label_jobTitle = "Intitulé du poste";
    private $label_description = "Description";
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name', null, array('label'=>$this->label_name))
            ->add('lastname', null, array('label'=>$this->label_lastname))
            ->add('image', null, array('label'=>$this->label_image))
            ->add('jobTitle', null, array('label'=>$this->label_jobTitle))
            ->add('description', null, array('label'=>$this->label_description))
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
            ->add('lastname', null, array('label'=>$this->label_lastname))
            ->add('image', null, array('label'=>$this->label_image))
            ->add('jobTitle', null, array('label'=>$this->label_jobTitle))
            ->add('description', null, array('label'=>$this->label_description))
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
            ->add('lastname', null, array('label'=>$this->label_lastname))
            ->add('image', null, array('label'=>$this->label_image))
            ->add('jobTitle', null, array('label'=>$this->label_jobTitle))
            ->add('description', null, array('label'=>$this->label_description))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name', null, array('label'=>$this->label_name))
            ->add('lastname', null, array('label'=>$this->label_lastname))
            ->add('image', null, array('label'=>$this->label_image))
            ->add('jobTitle', null, array('label'=>$this->label_jobTitle))
            ->add('description', null, array('label'=>$this->label_description))
        ;
    }
}
