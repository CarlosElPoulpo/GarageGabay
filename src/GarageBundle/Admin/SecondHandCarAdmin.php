<?php

namespace GarageBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class SecondHandCarAdmin extends AbstractAdmin
{
    private  $label_title = "Titre";
    private  $label_brand = "Marque";
    private  $label_model = "Modèle";
    private  $label_year = "Année";
    private  $label_price = "Prix";
    private  $label_creationDate = "Date de création";
    private  $label_pricePerMonth = "Prix par Mois";
    private  $label_gear = "Boite de vitesse";
    private  $label_fuel = "Carburant";
    private  $label_km = "Kilométrage";
    private  $label_LBCLink = "Lien LeBonCoin";
    private  $label_description = "Description";
    private  $label_sold = "Vendu";
    private  $label_coverImage = "Image de couverture";



    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title', null, array(
                'label' => $this->label_description
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
            ->add('pricePerMonth', null, array(
                'label' => $this->label_pricePerMonth
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
            ->add('sold', null, array(
                'label' => $this->label_sold
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
                'label' => $this->label_description
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
            ->add('pricePerMonth', null, array(
                'label' => $this->label_pricePerMonth
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
            ->add('sold', null, array(
                'label' => $this->label_sold
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
                'label' => $this->label_description
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
            ->add('pricePerMonth', null, array(
                'label' => $this->label_pricePerMonth
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
            ->add('sold', null, array(
                'label' => $this->label_sold
            ))
            ->end()

            ->with('Images')
            ->add('coverImage', 'sonata_type_model', array(
                'label' => $this->label_coverImage
            ))
            ->add('images','sonata_type_model',array(
                'label' => false,
                'multiple' => true
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
                'label' => $this->label_description
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
            ->add('pricePerMonth', null, array(
                'label' => $this->label_pricePerMonth
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
            ->add('sold', null, array(
                'label' => $this->label_sold
            ))
            ->add('coverImage')
            ->add('images')
        ;
    }
}
