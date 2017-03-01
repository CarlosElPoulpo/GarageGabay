<?php

namespace GarageBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class NewCarAdmin extends AbstractAdmin
{
    private  $label_title = "Titre";
    private  $label_model = "Modèle";
    private  $label_price = "Prix";
    private  $label_creationDate = "Date de création";
    private  $label_pricePerMonth = "Prix par Mois";
    private  $label_renaultLink = "Lien Renault.fr";
    private  $label_vehiculeType = "Type de véhicule";
    private  $label_coverImage = "Image de couverture";
    private  $label_icone = "Icone";
    private  $label_partnerships = "Partenariats";
    private  $label_duration = "Durée";


    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title', null, array(
                'label' => $this->label_title
            ))
            ->add('model', null, array(
                'label' => $this->label_model
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
            ->add('duration', null, array(
                'label' => $this->label_duration
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
            ->add('model', null, array(
                'label' => $this->label_model
            ))
            ->add('title', null, array(
                'label' => $this->label_title
            ))
            ->add('price', null, array(
                'label' => $this->label_price
            ))
            /*->add('coverImage', null, array(
                'label' => $this->label_coverImage,
            ))
            ->add('icone')
            ->add('vehiculeType', null, array(
                'label' => $this->label_vehiculeType
            ))
            ->add('price', null, array(
                'label' => $this->label_price
            ))
            ->add('creationDate', null, array(
                'label' => $this->label_creationDate
            ))
            ->add('partnerships')
            ->add('pricePerMonth', null, array(
                'label' => $this->label_pricePerMonth
            ))
            ->add('duration', null, array(
                'label' => $this->label_duration
            ))
            ->add('renaultLink', null, array(
                'label' => $this->label_renaultLink
            ))*/
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
            ->add('model', null, array(
                'label' => $this->label_model
            ))
            ->add('vehiculeType', null, array(
                'label' => $this->label_vehiculeType
            ))
            ->add('price', null, array(
                'label' => $this->label_price
            ))

            ->add('renaultLink', null, array(
                'label' => $this->label_renaultLink
            ))
            ->end()

            ->with('Images')
            ->add('coverImage', 'sonata_type_model_list', array(
                'label' => $this->label_coverImage,
                'btn_list' => false,
                //'nullable' => true
            ))
            ->add('icone', 'sonata_type_model_list', array(
                'label' => $this->label_icone,
                'btn_list' => false
            ))
            ->end()

            ->with('Partenariats')
            ->add('partnerships','sonata_type_model', array(
                'label' => $this->label_partnerships,
                'multiple' => true,
            ))
            ->add('pricePerMonth', null, array(
                'label' => $this->label_pricePerMonth
            ))
            ->add('duration', null, array(
                'label' => $this->label_duration
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
            ->add('model', null, array(
                'label' => $this->label_model
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
            ->add('duration', null, array(
                'label' => $this->label_duration
            ))
            ->add('renaultLink', null, array(
                'label' => $this->label_renaultLink
            ))
            ->add('vehiculeType', null, array(
                'label' => $this->label_vehiculeType
            ))
            ->add('coverImage')
//            ->add('coverImage', 'entity', array(
//                'class' => 'ImageBundle\Entity\Image',
//                'template' => 'GarageBundle:admin:image_preview_coverImage.html.twig'
//            ))
            ->add('icone')
//            ->add('icone', 'entity', array(
//                'class' => 'ImageBundle\Entity\Image',
//                'template' => 'AppBundle:admin:image_preview_embedded.html.twig'
//            ))
        ;
    }

}
