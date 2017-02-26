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
    private $label_arrange = "Ordre d'apparition";
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name', null, array('label'=>$this->label_name))
            ->add('lastname', null, array('label'=>$this->label_lastname))
            ->add('jobTitle', null, array('label'=>$this->label_jobTitle))
            ->add('description', null, array('label'=>$this->label_description))
            ->add('arrange', null, array('label'=>$this->label_arrange))
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
            ->add('arrange', null, array('label'=>$this->label_arrange))
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
            ->add('image', 'sonata_type_model_list', array(
                'label' => $this->label_image,
                'required' => false,
                'btn_list' => false,
            ))
            ->add('jobTitle', null, array('label'=>$this->label_jobTitle))
            ->add('description', null, array('label'=>$this->label_description))
            ->add('arrange', null, array('label'=>$this->label_arrange))
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
//            ->add('image', null, array(
//                'label'=>$this->label_image,
            ->add('image', null, array(
                'template' => 'ImageBundle:admin:image_preview_embedded.html.twig'
            ))
            ->add('jobTitle', null, array('label'=>$this->label_jobTitle))
            ->add('description', null, array('label'=>$this->label_description))
            ->add('arrange', null, array('label'=>$this->label_arrange))
        ;
    }
}
