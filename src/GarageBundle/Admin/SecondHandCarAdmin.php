<?php

namespace GarageBundle\Admin;

use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SecondHandCarAdmin extends AbstractAdmin
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
            ->add('brand', null, array(
                'label' => "car.secondhand.brand"
            ))
            ->add('model', null, array(
                'label' => "car.model"
            ))
            ->add('year', null, array(
                'label' => "car.secondhand.year"
            ))
            ->add('price', null, array(
                'label' => "car.price"
            ))
            ->add('creationDate', null, array(
                'label' => "car.creationdate"
            ))
            ->add('gear', null, array(
                'label' => "car.secondhand.gear"
            ))
            ->add('fuel', null, array(
                'label' => "car.secondhand.fuel"
            ))
            ->add('km', null, array(
                'label' => "car.secondhand.km"
            ))
            ->add('lBClink', null, array(
                'label' => "car.secondhand.lblink"
            ))
            ->add('description', null, array(
                'label' => "car.secondhand.description"
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
            ->add('title', null, array(
                'label' => "car.title"
            ))
            ->add('brand', null, array(
                'label' => "car.secondhand.brand"
            ))
            ->add('model', null, array(
                'label' => "car.model"
            ))
            ->add('price', null, array(
                'label' => "car.price"
            ))
            ->add('km', null, array(
                'label' => "car.secondhand.km"
            ))
            ->add('creationDate', null, array(
                'label' => "car.creationdate"
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
            ->with("Voiture d'occasion", array('class'=>'col-md-7 left'))
                ->add('title', null, array(
                    'label' => "car.title"
                ))
                ->add('brand', null, array(
                    'label' => "car.secondhand.brand"
                ))
                ->add('model', null, array(
                    'label' => "car.model"
                ))
                ->add('year', null, array(
                    'label' => "car.secondhand.year"
                ))
                ->add('price', null, array(
                    'label' => "car.price"
                ))
                ->add('gear', ChoiceType::class, array(
                    'choices' => array('Manuelle' => 'Manuelle', 'Automatique' => 'Automatique'),
                    'label' => "car.secondhand.gear"
                ))
                ->add('fuel', ChoiceType::class, array(
                    'choices' => array('Essence' => 'Essence', 'Diesel' => 'Diesel'),
                    'label' => "car.secondhand.fuel"
                ))
                ->add('km', null, array(
                    'label' => "car.secondhand.km"
                ))
                ->add('lBClink', null, array(
                    'label' => "car.secondhand.lblink"
                ))
                ->add('description', CKEditorType::class, array(
                    'label' => "car.secondhand.description", 'config' => array('uiColor' => '#ffffff')
                ))
                ->add('status')
            ->end()

            ->with('Images', array('class'=>'col-md-5 right'))
                    ->add('coverImage', 'sonata_type_model_list', array(
                        'label' => "car.secondhand.coverimage",
                        'btn_list' => false,
                        'required' => true
                    ))
                    ->add('images','sonata_type_model',array(
                        'label' => "car.secondhand.images",
                        'multiple' => true,
                        'required' => false
                    ))
            ->end()
            ->with("Faire une promotion", array('class'=>'col-md-5 right'))
                ->add('promotion', 'sonata_type_model_list', array('label'=>false, "required"=>false, 'btn_list' => false))
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
            ->add('brand', null, array(
                'label' => "car.secondhand.brand"
            ))
            ->add('model', null, array(
                'label' => "car.model"
            ))
            ->add('year', null, array(
                'label' => "car.secondhand.year"
            ))
            ->add('price', null, array(
                'label' => "car.price"
            ))
            ->add('creationDate', null, array(
                'label' => "car.creationdate"
            ))
            ->add('gear', null, array(
                'label' => "car.secondhand.gear"
            ))
            ->add('fuel', null, array(
                'label' => "car.secondhand.fuel"
            ))
            ->add('km', null, array(
                'label' => "car.secondhand.km"
            ))
            ->add('lBClink', null, array(
                'label' => "car.secondhand.lblink"
            ))
            ->add('description', null, array(
                'label' => "car.secondhand.description"
            ))
            ->add('coverImage')
            ->add('images')
        ;
    }
}
