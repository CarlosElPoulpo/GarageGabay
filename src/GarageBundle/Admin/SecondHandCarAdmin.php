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
    private  $label_title = "Titre";
    private  $label_brand = "Marque";
    private  $label_model = "Modèle";
    private  $label_year = "Année";
    private  $label_price = "Prix";
    private  $label_creationDate = "Date de création";
    private  $label_gear = "Boite de vitesse";
    private  $label_fuel = "Carburant";
    private  $label_km = "Kilométrage";
    private  $label_LBCLink = "Lien LeBonCoin";
    private  $label_description = "Description";
    private  $label_coverImage = "Image de couverture";
    private  $label_images = "Images supplémentaires";



    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title', null, array(
                'label' => $this->label_title
            ))
            ->add('brand', null, array(
                'label' => $this->label_brand
            ))
            ->add('model', null, array(
                'label' => $this->label_model
            ))
            ->add('year', null, array(
                'label' => $this->label_year
            ))
            ->add('price', null, array(
                'label' => $this->label_price
            ))
            ->add('creationDate', null, array(
                'label' => $this->label_creationDate
            ))
            ->add('gear', null, array(
                'label' => $this->label_gear
            ))
            ->add('fuel', null, array(
                'label' => $this->label_fuel
            ))
            ->add('km', null, array(
                'label' => $this->label_km
            ))
            ->add('lBClink', null, array(
                'label' => $this->label_LBCLink
            ))
            ->add('description', null, array(
                'label' => $this->label_description
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
            ->add('title', null, array(
                'label' => $this->label_title
            ))
            ->add('brand', null, array(
                'label' => $this->label_brand
            ))
            ->add('model', null, array(
                'label' => $this->label_model
            ))
            ->add('year', null, array(
                'label' => $this->label_year
            ))
            ->add('price', null, array(
                'label' => $this->label_price
            ))
            ->add('creationDate', null, array(
                'label' => $this->label_creationDate
            ))
            ->add('gear', null, array(
                'label' => $this->label_gear
            ))
            ->add('fuel', null, array(
                'label' => $this->label_fuel
            ))
            ->add('km', null, array(
                'label' => $this->label_km
            ))
            ->add('lBClink', null, array(
                'label' => $this->label_LBCLink
            ))
            ->add('description', null, array(
                'label' => $this->label_description
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

            ->add('title', null, array(
                'label' => $this->label_title
            ))
            ->add('brand', null, array(
                'label' => $this->label_brand
            ))
            ->add('model', null, array(
                'label' => $this->label_model
            ))
            ->add('year', null, array(
                'label' => $this->label_year
            ))
            ->add('price', null, array(
                'label' => $this->label_price
            ))
            ->add('gear', ChoiceType::class, array(
                'choices' => array('Manuelle' => 'Manuelle', 'Automatique' => 'Automatique'),
                'label' => $this->label_gear
            ))
            ->add('fuel', ChoiceType::class, array(
                'choices' => array('Essence' => 'Essence', 'Diesel' => 'Diesel'),
                'label' => $this->label_fuel
            ))
            ->add('km', null, array(
                'label' => $this->label_km
            ))
            ->add('lBClink', null, array(
                'label' => $this->label_LBCLink
            ))
            ->add('description', CKEditorType::class, array(
                'label' => $this->label_description, 'config' => array('uiColor' => '#ffffff')
            ))
            ->add('status')
            ->end()

            ->with('Images')
            ->add('coverImage', 'sonata_type_model_list', array(
                'label' => $this->label_coverImage,
                'btn_list' => false
            ))
            ->add('images','sonata_type_model',array(
                'label' => $this->label_images,
                'multiple' => true,
                'required' => false
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
                'label' => $this->label_title
            ))
            ->add('brand', null, array(
                'label' => $this->label_brand
            ))
            ->add('model', null, array(
                'label' => $this->label_model
            ))
            ->add('year', null, array(
                'label' => $this->label_year
            ))
            ->add('price', null, array(
                'label' => $this->label_price
            ))
            ->add('creationDate', null, array(
                'label' => $this->label_creationDate
            ))
            ->add('gear', null, array(
                'label' => $this->label_gear
            ))
            ->add('fuel', null, array(
                'label' => $this->label_fuel
            ))
            ->add('km', null, array(
                'label' => $this->label_km
            ))
            ->add('lBClink', null, array(
                'label' => $this->label_LBCLink
            ))
            ->add('description', null, array(
                'label' => $this->label_description
            ))
            ->add('coverImage')
            ->add('images')
        ;
    }
}
