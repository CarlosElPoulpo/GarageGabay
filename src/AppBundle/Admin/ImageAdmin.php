<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
//use Symfony\Component\Form\Extension\Core\Type\FileType;
use Vich\UploaderBundle\Form\Type\VichFileType;

class ImageAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('imageName', null, array(
                    'label' => 'Nom')
            )
            ->add('updatedAt', null, array(
                    'label' => 'Date de modification')
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
            ->add('imageName', null, array(
                    'label' => 'Nom')
            )
            ->add('updatedAt', null, array(
            'label' => 'Date de modification')
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
//            ->add('imageFile', FileType::class, array(
//                'label' => false)
//            )
            ->add('imageFile', VichFileType::class, array(
                    'label' => false)
            )
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('imageName', null, array(
                    'label' => 'Nom')
            )
            ->add('updatedAt', null, array(
                    'label' => 'Date de modification')
            )
            ->add('image', 'entity', array(
                'template' => 'AppBundle:admin:image_preview.html.twig'
            ))
        ;
    }
}
