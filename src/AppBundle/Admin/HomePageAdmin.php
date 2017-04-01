<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class HomePageAdmin extends AbstractAdmin
{
    protected $translationDomain = 'app';

    public function getDashboardActions()
    {
        $actions = parent::getDashboardActions();
        unset($actions['list']);
        $actions['list'] = array(
            'label'              => ' Modifier',
            'url'                => $this->generateUrl('list'),
            'icon'               => 'edit',
        );
        return $actions;
    }

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection
            ->remove('create')
            ->remove('delete');
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {

    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('_action', null, array(
                'actions' => array(
                    'edit' => array('template' => ':admin:edit_button_home_page.html.twig'),
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
            ->with('')
                ->add('title', null, array('label' => "homepage.title"))
                ->add('welcomeParagraph', null, array('label' => "homepage.welcomeparagraph"))
            ->end()
            ->with('Section sur la vente des voitures')
                ->add('titleCarSales', null, array('label' => "homepage.titlecarsales"))
                ->add('descriptionCarSales', null, array('label' => "homepage.descriptioncarsales"))
                ->add('videoUrl', null, array('label' => "homepage.videourl"))
                ->add('textUnderVideo', null, array('label' => "homepage.textundervideo"))
                ->add('titleCarSalesSecondHand', null, array('label' => "homepage.titlecarsalessecondhand"))
            ->end()
            ->with('Section sur les services')
                ->add('titleServices', null, array('label' => "homepage.titleservices"))
                ->add('descriptionServices', null, array('label' => "homepage.descriptionservices"))
            ->end()
            ->with("Section sur l'équipe")
                ->add('titleTeam', null, array('label' => "homepage.titleteam"))
                ->add('descriptionTeam', null, array('label' => "homepage.descriptionteam"))
            ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('title', null, array('label' => "homepage.title"))
            ->add('welcomeParagraph', null, array('label' => "homepage.welcomeparagraph"))
            ->add('titleCarSales', null, array('label' => "homepage.titlecarsales"))
            ->add('descriptionCarSales', null, array('label' => "homepage.descriptioncarsales"))
            ->add('videoUrl', null, array('label' => "homepage.videourl"))
            ->add('titleCarSalesSecondHand', null, array('label' => "homepage.titlecarsalessecondhand"))
            ->add('titleServices', null, array('label' => "homepage.titleservices"))
            ->add('descriptionServices', null, array('label' => "homepage.descriptionservices"))
            ->add('titleTeam', null, array('label' => "homepage.titleteam"))
            ->add('descriptionTeam', null, array('label' => "homepage.descriptionteam"))
        ;
    }
}
