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
    protected $translationDomain = 'app';

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title', null, array('label'=>"article.title"))
            ->add('introduction', null, array('label'=>"article.introduction"))
            ->add('coverImage', null, array('label'=>"article.coverimage"))
            ->add('content', null, array('label'=>"article.content"))
            ->add('writtenBy', null, array('label'=>"article.writtenby"))
            ->add('publicationDate', null, array('label'=>"article.publicationdate"))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        unset($this->listModes['mosaic']);
        $listMapper
            ->add('title', null, array('label'=>"article.title"))
            ->add('introduction', null, array('label'=>"article.introduction"))
            ->add('writtenBy', null, array('label'=>"article.writtenby"))
            ->add('publicationDate', null, array('label'=>"article.publicationdate"))
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
            ->add('title', null, array('label'=>"article.title"))
            ->add('introduction', null, array('label'=>"article.introduction"))
            ->add('content', CKEditorType::class, array('label'=>"article.content",'config' => array('uiColor' => '#ffffff')))
            ->add('coverImage', 'sonata_type_model_list', array(
                'label' => "article.coverimage",
                'required' => false,
                'btn_list' => false
            ))
            ->add('writtenBy', null, array('label'=>"article.writtenby"))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('title', null, array('label'=>"article.title"))
            ->add('introduction', null, array('label'=>"article.introduction"))
            ->add('coverImage', null, array('label'=>"article.coverimage"))
            ->add('content', null, array('label'=>"article.content"))
            ->add('writtenBy', null, array('label'=>"article.writtenby"))
            ->add('publicationDate', null, array('label'=>"article.publicationdate"))
        ;
    }
}
