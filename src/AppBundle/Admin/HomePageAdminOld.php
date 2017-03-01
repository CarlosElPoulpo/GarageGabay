<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class HomePageAdmin extends AbstractAdmin
{
    private $label_description ="Texte principal";
    private $label_videoUrl = "Lien Youtube de la pub Renault";

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection
            ->remove('create')
            ->remove('delete');
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
        $listMapper
            ->add('welcomeParagraph', null, array('label' => $this->label_description))
            ->add('videoUrl', null, array('label' => $this->label_videoUrl))
            ->add('image')
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
            ->add('description', null, array('label' => $this->label_description))
            ->add('videoUrl', null, array('label' => $this->label_videoUrl))
            ->add('image', 'sonata_type_admin', array(
                'label' => false,
                'required' => false,
                'btn_list' => false
            ))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('description', null, array('label' => $this->label_description))
            ->add('videoUrl', null, array('label' => $this->label_videoUrl))
            ->add('image', 'sonata_type_admin', array(
                'label' => false,
                'required' => false,
                'btn_list' => false
            ))

        ;
    }
}
