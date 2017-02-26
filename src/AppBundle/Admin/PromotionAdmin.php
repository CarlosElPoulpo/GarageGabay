<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class PromotionAdmin extends AbstractAdmin
{
    private $label_title = "Titre";
    private $label_description = "Description";
    private $label_url = "Lien Vidéo";
    private $label__publicationDate = "Date de publication";
    private $label_endDate = "Date de fin de publication";

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title', null, array(
                    'label' => $this->label_title)
            )
            ->add('description', null, array(
                    'label' => $this->label_description)
            )
            ->add('url', null, array(
                    'label' => $this->label_url)
            )
            ->add('publicationDate', null, array(
                    'label' => $this->label__publicationDate)
            )
            ->add('endDate', null, array(
                    'label' => $this->label_endDate)
            )
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('title', null, array(
                    'label' => $this->label_title)
            )
            ->add('description', null, array(
                    'label' => $this->label_description)
            )
            ->add('url', null, array(
                    'label' => $this->label_url)
            )
            ->add('publicationDate', null, array(
                    'label' => $this->label__publicationDate)
            )
            ->add('endDate', null, array(
                    'label' => $this->label_endDate)
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
                    'label' => $this->label_title)
            )
            ->add('description', CKEditorType::class, array('label'=>$this->label_description,'config' => array('uiColor' => '#ffffff')))
            ->add('url', null, array(
                    'label' => $this->label_url)
            )

            ->add('publicationDate', 'sonata_type_date_picker' , array(
                    'label' => $this->label__publicationDate,
                )
            )

            ->add('endDate', 'sonata_type_date_picker', array(
                    'label' => $this->label_endDate,
                    )
            )
            ->end()

            ->with('Image')
            ->add('image', 'sonata_type_model_list', array(
                'label' => false,
                'required' => false,
                'btn_list' => false
            ))
            ->end()

            ->with('Voiture')
            ->add('secondHandCar', null, array(
                'label' => false,
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
                    'label' => $this->label_title)
            )
            ->add('description', null, array(
                    'label' => $this->label_description)
            )
            ->add('url', null, array(
                    'label' => $this->label_url)
            )
            ->add('publicationDate', null, array(
                    'label' => $this->label__publicationDate,
                    'widget' => 'single_text',
                )
            )
            ->add('endDate', null, array(
                    'label' => $this->label_endDate,
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
