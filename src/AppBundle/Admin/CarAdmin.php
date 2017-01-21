<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\Type\ModelListType;
use Vich\UploaderBundle\Form\Type\VichFileType;


class CarAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('title', null, array(
                    'label' => 'Titre')
            )
            ->add('price', null, array(
                    'label' => 'Prix')
            )
            ->add('city', null, array(
                    'label' => 'Ville')
            )
            ->add('brand', null, array(
                    'label' => 'Marque')
            )
            ->add('model', null, array(
                    'label' => 'Modèle')
            )
            ->add('year', null, array(
                    'label' => 'Année')
            )
            ->add('km', null, array(
                    'label' => 'Kilométrage')
            )
            ->add('fuel', null, array(
                    'label' => 'Carburant')
            )
            ->add('gear', null, array(
                    'label' => 'Boite de vitesse')
            )
            ->add('description', null, array(
                    'label' => 'Descruiption')
            )
            ->add('sold', null, array(
                    'label' => 'Vendu')
            )
            ->add('publicationDate', null, array(
                    'label' => 'Date de publication')
            )
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('title', null, array(
                    'label' => 'Titre')
            )
            ->add('price',null, array(
                    'label' => 'Prix')
            )
            ->add('city',null, array(
                    'label' => 'Ville')
            )
            ->add('brand',null, array(
                    'label' => 'Marque')
            )
            ->add('model',null, array(
                    'label' => 'Modèle')
            )
            ->add('year',null, array(
                    'label' => 'Année')
            )
            ->add('km',null, array(
                    'label' => 'Kilométrage')
            )
            ->add('fuel',null, array(
                    'label' => 'Carburant')
            )
            ->add('gear',null, array(
                    'label' => 'Boite de vitesse')
            )
            ->add('description',null, array(
                    'label' => 'Description')
            )
            ->add('sold',null, array(
                    'label' => 'Vendu')
            )
            ->add('publicationDate',null, array(
                    'label' => 'Date de publication')
            )
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
                    'label' => 'Titre')
            )
            ->add('price', null, array(
                    'label' => 'Prix')
            )
            ->add('city', null, array(
                    'label' => 'Ville')
            )
            ->add('brand', null, array(
                'label' => 'Marque')
            )
            ->add('model', null, array(
                'label' => 'Modèle')
            )
            ->add('year', null, array(
                    'label' => 'Année')
            )
            ->add('km', null, array(
                    'label' => 'Kilométrage')
            )
            ->add('fuel', null, array(
                    'label' => 'Carburant')
            )
            ->add('gear', null, array(
                    'label' => 'Boite de vitesse')
            )
            ->add('description', null, array(
                    'label' => 'Description')
            )
            ->add('sold', null, array(
                    'label' => 'Vendu')
            )
            ->end()

            ->with('Images')
            ->add('coverImage', 'sonata_type_admin', array(
                'label' => false,
                'required' => false,
                'btn_list' => false
            ))
            ->add('images', 'sonata_type_collection', array(
                'label' => false,
                'required' => false,
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
                    'label' => 'Titre')
            )
            ->add('price',null, array(
                'label' => 'Prix')
            )
            ->add('city', null, array(
                    'label' => 'Ville')
            )
            ->add('brand', null, array(
                    'label' => 'Marque')
            )
            ->add('model', null, array(
                    'label' => 'Modèle')
            )
            ->add('year', null, array(
                    'label' => 'Année')
            )
            ->add('km', null, array(
                    'label' => 'Kilométrage')
            )
            ->add('fuel', null, array(
                    'label' => 'Carburant')
            )
            ->add('gear', null, array(
                    'label' => 'Boite de vitesse')
            )
            ->add('description', null, array(
                    'label' => 'Description')
            )
            ->add('sold', null, array(
                    'label' => 'Vendu')
            )
            ->add('publicationDate', null, array(
                    'label' => 'Date de publication')
            )
            ->end()

            ->with('Image liées')
            ->add('coverImage', 'entity')
            ->add('images', ModelListType::class, array(
                'label' => false,
                'required' => true,
                'btn_list' => false
            ))
            ->end()
        ;
    }
}
