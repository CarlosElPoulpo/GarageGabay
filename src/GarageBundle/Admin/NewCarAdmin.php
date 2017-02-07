<?php

namespace GarageBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class NewCarAdmin extends AbstractAdmin
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
    private  $label_description = "Description";
    private  $label_renaultLink = "Lien Renault.fr";
    private  $label_vehiculeType = "Type de véhicule";
    private  $label_coverImage = "Image de couverture";
    private  $label_icone = "Icone";


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
            ->add('pricePerMonth', null, array(
                'label' => $this->label_pricePerMonth
            ))
            ->add('gear', null, array(
                'label' => $this->label_gear
            ))
            ->add('fuel', null, array(
                'label' => $this->label_fuel
            ))
            ->add('description', null, array(
                'label' => $this->label_description
            ))
            ->add('renaultLink', null, array(
                'label' => $this->label_renaultLink
            ))
            ->add('vehiculeType', null, array(
                'label' => $this->label_vehiculeType
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
            ->add('pricePerMonth', null, array(
                'label' => $this->label_pricePerMonth
            ))
            ->add('gear', null, array(
                'label' => $this->label_gear
            ))
            ->add('fuel', null, array(
                'label' => $this->label_fuel
            ))
            ->add('description', null, array(
                'label' => $this->label_description
            ))
            ->add('renaultLink', null, array(
                'label' => $this->label_renaultLink
            ))
            ->add('vehiculeType', null, array(
                'label' => $this->label_vehiculeType
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
            ->add('pricePerMonth', null, array(
                'label' => $this->label_pricePerMonth
            ))
            ->add('gear', ChoiceType::class, array(
                'choices' => array('Manuelle' => 'Manuelle', 'Automatique' => 'Automatique'),
                'label' => $this->label_gear
            ))
            ->add('fuel', ChoiceType::class, array(
                'choices' => array('Essence' => 'Essence', 'Diesel' => 'Diesel'),
                'label' => $this->label_fuel
            ))
            ->add('description', null, array(
                'label' => $this->label_description
            ))
            ->add('renaultLink', null, array(
                'label' => $this->label_renaultLink
            ))
            ->add('vehiculeType', null, array(
                'label' => $this->label_vehiculeType
            ))
            ->end()

            ->with('Images')
            ->add('coverImage', 'sonata_type_model', array(
                'label' => $this->label_coverImage,
            ))
            ->add('icone', 'sonata_type_model', array(
                'label' => $this->label_icone
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
            ->add('pricePerMonth', null, array(
                'label' => $this->label_pricePerMonth
            ))
            ->add('gear', null, array(
                'label' => $this->label_gear
            ))
            ->add('fuel', null, array(
                'label' => $this->label_fuel
            ))
            ->add('description', null, array(
                'label' => $this->label_description
            ))
            ->add('renaultLink', null, array(
                'label' => $this->label_renaultLink
            ))
            ->add('vehiculeType', null, array(
                'label' => $this->label_vehiculeType
            ))
            ->add('coverImage')
            ->add('icone')
        ;
    }

}
