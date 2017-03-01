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

    private $label_title = "Titre d'accueil";
    private $label_welcomeParagraph ="Texte d'accueil";
    private $label_titleCarSales = "Titre section vente des voitures";
    private $label_descriptionCarSales = "Texte début de section";
    private $label_videoUrl = "Lien Youtube de la pub Renault";
    private $label_titleCarSalesSecondHand = "Sous-titre vente de voitures d'occasion";
    private $label_titleServices = "Titre section service";
    private $label_descriptionServices = "Texte début de section";
    private $label_titleTeam = "Titre section présentation de l'équipe";
    private $label_descriptionTeam = "Texte début de section";

    public function getDashboardActions()
    {
        $actions = parent::getDashboardActions();
        unset($actions['list']);
        $actions['modify'] = array(
            'label'              => ' Modifier',
            'url'                => $this->generateUrl('modify'),
            'icon'               => 'edit',
        );
        return $actions;
    }

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection
            ->add('modify')
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
                ->add('title', null, array('label' => $this->label_title))
                ->add('welcomeParagraph', null, array('label' => $this->label_welcomeParagraph))
            ->end()
            ->with('Section sur la vente des voitures')
                ->add('titleCarSales', null, array('label' => $this->label_titleCarSales))
                ->add('descriptionCarSales', null, array('label' => $this->label_descriptionCarSales))
                ->add('videoUrl', null, array('label' => $this->label_videoUrl))
                ->add('titleCarSalesSecondHand', null, array('label' => $this->label_titleCarSalesSecondHand))
            ->end()
            ->with('Section sur les services')
                ->add('titleServices', null, array('label' => $this->label_titleServices))
                ->add('descriptionServices', null, array('label' => $this->label_descriptionServices))
            ->end()
            ->with("Section sur l'équipe")
                ->add('titleTeam', null, array('label' => $this->label_titleTeam))
                ->add('descriptionTeam', null, array('label' => $this->label_descriptionTeam))
            ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('title', null, array('label' => $this->label_title))
            ->add('welcomeParagraph', null, array('label' => $this->label_welcomeParagraph))
            ->add('titleCarSales', null, array('label' => $this->label_titleCarSales))
            ->add('descriptionCarSales', null, array('label' => $this->label_descriptionCarSales))
            ->add('videoUrl', null, array('label' => $this->label_videoUrl))
            ->add('titleCarSalesSecondHand', null, array('label' => $this->label_titleCarSalesSecondHand))
            ->add('titleServices', null, array('label' => $this->label_titleServices))
            ->add('descriptionServices', null, array('label' => $this->label_descriptionServices))
            ->add('titleTeam', null, array('label' => $this->label_titleTeam))
            ->add('descriptionTeam', null, array('label' => $this->label_descriptionTeam))
        ;
    }
}
