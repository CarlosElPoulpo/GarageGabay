<?php

namespace AppBundle\Admin;

use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ArticleAdmin extends AbstractAdmin
{

    private $label_title = "Titre";
    private $label_coverImage = "Image de couverture";
    private $label_description = "Description";
    private $label_content = "Contenu";
    private $label_writtenBy = "Ecris par";
    private $label_publicationDate = "Date de publication";
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title', null, array('label'=>$this->label_title))
            ->add('coverImage', null, array('label'=>$this->label_coverImage))
            ->add('description', null, array('label'=>$this->label_description))
            ->add('content', null, array('label'=>$this->label_content))
            ->add('writtenBy', null, array('label'=>$this->label_writtenBy))
            ->add('publicationDate', null, array('label'=>$this->label_publicationDate))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        unset($this->listModes['mosaic']);
        $listMapper
            ->add('title', null, array('label'=>$this->label_title))
            ->add('coverImage', null, array('label'=>$this->label_coverImage))
            ->add('description', null, array('label'=>$this->label_description))
            ->add('content', null, array('label'=>$this->label_content))
            ->add('writtenBy', null, array('label'=>$this->label_writtenBy))
            ->add('publicationDate', null, array('label'=>$this->label_publicationDate))
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
            ->add('title', null, array('label'=>$this->label_title))
            ->add('coverImage', null, array('label'=>$this->label_coverImage))
            ->add('description', CKEditorType::class, array('label'=>$this->label_description,'config' => array('uiColor' => '#ffffff')))
            ->add('content', null, array('label'=>$this->label_content))
            ->add('writtenBy', null, array('label'=>$this->label_writtenBy))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('title', null, array('label'=>$this->label_title))
            ->add('coverImage', null, array('label'=>$this->label_coverImage))
            ->add('description', null, array('label'=>$this->label_description))
            ->add('content', null, array('label'=>$this->label_content))
            ->add('writtenBy', null, array('label'=>$this->label_writtenBy))
            ->add('publicationDate', null, array('label'=>$this->label_publicationDate))
        ;
    }
}
