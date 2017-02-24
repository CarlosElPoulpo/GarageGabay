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

    private $label_name = "Nom du garage";
    private $label_image = "Photo";
    private $label_description = "Description";
    private $label_roadnumber = "Numéro de rue";
    private $label_road = "Rue";
    private $label_city = "Ville";
    private $label_postalCode = "Code postal";
    private $label_phone = "Numéro de téléphone";
    private $label_email = "Adresse email";
    private $label_facebookPageLink = "Lien de la page Facebook";
    private $label_googlePageLink = "Lien de la page Google";

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->remove('create')->remove('delete');
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
            ->add('name', null, array('label'=>$this->label_name))
            ->add('image', null, array('label'=>$this->label_image))
            ->add('description', null, array('label'=>$this->label_description))
            ->add('roadNumber', null, array('label'=>$this->label_roadnumber))
            ->add('road', null, array('label'=>$this->label_road))
            ->add('city', null, array('label'=>$this->label_city))
            ->add('postalCode', null, array('label'=>$this->label_postalCode))
            ->add('phone', null, array('label'=>$this->label_phone))
            ->add('email', null, array('label'=>$this->label_email))
            ->add('facebookPageLink', null, array('label'=>$this->label_facebookPageLink))
            ->add('googlePageLink', null, array('label'=>$this->label_googlePageLink))
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
                ->add('name', null, array('label'=>$this->label_name))
                ->add('image', null, array('label'=>$this->label_image))
                ->add('description', null, array('label'=>$this->label_description))
            ->end()
            ->with('Informations de contact', array(
                'class'       => 'col-md-6',
            ))
                ->add('roadNumber', null, array('label'=>$this->label_roadnumber))
                ->add('road', null, array('label'=>$this->label_road))
                ->add('city', null, array('label'=>$this->label_city))
                ->add('postalCode', null, array('label'=>$this->label_postalCode))
                ->add('phone', null, array('label'=>$this->label_phone))
                ->add('email', null, array('label'=>$this->label_email))
                ->add('facebookPageLink', null, array('label'=>$this->label_facebookPageLink))
                ->add('googlePageLink', null, array('label'=>$this->label_googlePageLink))
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
            ->add('image', null, array('label'=>$this->label_image))
            ->add('description', null, array('label'=>$this->label_description))
            ->add('roadNumber', null, array('label'=>$this->label_roadnumber))
            ->add('road', null, array('label'=>$this->label_road))
            ->add('city', null, array('label'=>$this->label_city))
            ->add('postalCode', null, array('label'=>$this->label_postalCode))
            ->add('phone', null, array('label'=>$this->label_phone))
            ->add('email', null, array('label'=>$this->label_email))
            ->add('facebookPageLink', null, array('label'=>$this->label_facebookPageLink))
            ->add('googlePageLink', null, array('label'=>$this->label_googlePageLink))
        ;
    }
}
