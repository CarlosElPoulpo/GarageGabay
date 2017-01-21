<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PromotionAdmin extends AbstractAdmin
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
            ->add('description', null, array(
                    'label' => 'Description')
            )
            ->add('url', null, array(
                    'label' => 'Lien vidéo')
            )
            ->add('publicationDate', null, array(
                    'label' => 'Date de fin publication')
            )
            ->add('endDate', null, array(
                    'label' => 'Date de fin publication')
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
            ->add('description', null, array(
                    'label' => 'Description')
            )
            ->add('url', null, array(
                    'label' => 'Lien vidéo')
            )
            ->add('publicationDate', null, array(
                    'label' => 'Date de fin publication')
            )
            ->add('endDate', null, array(
                    'label' => 'Date de fin publication')
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
            ->add('description', null, array(
                    'label' => 'Description')
            )
            ->add('url', null, array(
                    'label' => 'Lien Vidéo')
            )
            ->add('publicationDate', null, array(
                    'label' => 'Date de publication',
                    'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy'
                    )
            )

            ->add('endDate', null, array(
                    'label' => 'Date de fin publication',
                    'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy',
                    'placeholder' => 'jj/mm/aaaa'
                    )
            )
            ->end()

            ->with('image')
            ->add('image', 'sonata_type_admin', array(
                'label' => false,
                'required' => false,
                'btn_list' => false
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
            ->add('description', null, array(
                    'label' => 'Description')
            )
            ->add('url', null, array(
                    'label' => 'Lien Vidéo')
            )
            ->add('publicationDate', null, array(
                    'label' => 'Date de publication',
                    'widget' => 'single_text',
                )
            )
            ->add('endDate', null, array(
                    'label' => 'Date de fin publication',
                    'widget' => 'single_text',
                    )
            )
            ->end()

//            ->with('Image liée')
//            ->add('image', 'entity', array(
//                'template' => 'AppBundle:admin:image_preview.html.twig'
//            ))
//            ->end()

            ->with('Image liée')
            ->add('image', 'entity')
            ->end()
        ;
    }
}
