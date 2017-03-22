<?php

namespace GarageBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class NewCarAdmin extends AbstractAdmin
{
    protected $translationDomain = 'garage';

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title', null, array(
                'label' => "car.title"
            ))
            ->add('model', null, array(
                'label' => "car.model"
            ))
            ->add('price', null, array(
                'label' => "car.price"
            ))
            ->add('creationDate', null, array(
                'label' => "car.creationdate"
            ))
            ->add('pricePerMonth', null, array(
                'label' => "car.newcar.pricepermonth"
            ))
            ->add('duration', null, array(
                'label' => "car.newcar.duration"
            ))
            ->add('renaultLink', null, array(
                'label' => "car.newcar.renaultlink"
            ))
            ->add('vehiculeType', null, array(
                'label' => "car.newcar.vehiculetype"
            ))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        unset($this->listModes['mosaic']);
        $listMapper
            ->add('coverImage', null, array( 'template' => ':admin:list_coverimage_for_car.html.twig', 'label' => 'Aperçu'))
            ->add('model', null, array(
                'label' => "car.model"
            ))
            ->add('title', null, array(
                'label' => "car.title"
            ))
            ->add('price', null, array(
                'label' => "car.price"
            ))
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
            ->with('Voiture neuve', array('class'=>'col-md-7 left'))
            ->add('title', null, array(
                'label' => "car.title"
            ))
            ->add('model', null, array(
                'label' => "car.model"
            ))
            ->add('vehiculeType', null, array(
                'label' => "car.newcar.vehiculetype"
            ))
            ->add('price', null, array(
                'label' => "car.price"
            ))

            ->add('renaultLink', null, array(
                'label' => "car.newcar.renaultlink"
            ))
            ->end()

            ->with('Images', array('class'=>'col-md-5 right'))
            ->add('coverImage', 'sonata_type_model_list', array(
                'label' => "car.newcar.coverimage",
                'btn_list' => false,
            ))
            ->add('icone', 'sonata_type_model_list', array(
                'label' => "car.newcar.icon",
                'btn_list' => false,
            ))
            ->end()

            ->with('Partenariats', array('class'=>'col-md-5 right'))
            ->add('partnerships','sonata_type_model', array(
                'label' => "car.newcar.partnership",
                'multiple' => true,
                'required' =>false
            ))
            ->add('pricePerMonth', null, array(
                'label' => "car.newcar.pricepermonth"
            ))
            ->add('duration', null, array(
                'label' => "car.newcar.duration"
            ))
            ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('title', null, array(
                'label' => "car.title"
            ))
            ->add('model', null, array(
                'label' => "car.model"
            ))
            ->add('price', null, array(
                'label' => "car.price"
            ))
            ->add('creationDate', null, array(
                'label' => "car.creationdate"
            ))
            ->add('pricePerMonth', null, array(
                'label' => "car.newcar.pricepermonth"
            ))
            ->add('duration', null, array(
                'label' => "car.newcar.duration"
            ))
            ->add('renaultLink', null, array(
                'label' => "car.newcar.renaultlink"
            ))
            ->add('vehiculeType', null, array(
                'label' => "car.newcar.vehiculetype"
            ))
            ->add('coverImage')

            ->add('icone')

        ;
    }

}
