<?php

namespace UserBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserAdmin extends AbstractAdmin
{
    private $label_username = "Pseudo";
    private $label_email = "Email";
    private $label_password = "Mot de passe";
    private $label_lastLogin = "Dernière connection";
    private $label_roles = "Droits";


    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('username', null, array(
                'label' => $this->label_username
            ))
            ->add('email', null, array(
                'label' => $this->label_email
            ))
            ->add('password', null, array(
                'label' => $this->label_password
            ))
            ->add('lastLogin', null, array(
                'label' => $this->label_lastLogin
            ))
            ->add('roles', null, array(
                'label' => $this->label_roles
            ))

        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('username', null, array(
                'label' => $this->label_username
            ))
            ->add('email', null, array(
                'label' => $this->label_email
            ))
            ->add('lastLogin', null, array(
                'label' => $this->label_lastLogin
            ))
            ->add('roles', null, array(
                'label' => $this->label_roles
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
        $container = $this->getConfigurationPool()->getContainer();
        $roles = $container->getParameter('security.role_hierarchy.roles');

        $rolesChoices = self::flattenRoles($roles);

        unset($this->listModes['mosaic']);

        $formMapper
            ->add('username', null, array(
                'label' => $this->label_username
            ))
            ->add('email', null, array(
                'label' => $this->label_email
            ));
        if ($this->isCurrentRoute('create')) {
            $formMapper->add('plainPassword', TextType::class, array(
                'label' => $this->label_password
            ));
        }
        $formMapper->add('roles', 'choice', array(
            'choices'  => $rolesChoices,
            'multiple' => true,
            'label' => $this->label_roles,
        ));
        ;
    }

    protected static function flattenRoles($rolesHierarchy)
    {
        $flatRoles = array();
        foreach($rolesHierarchy as $roles) {

            if(empty($roles)) {
                continue;
            }

            foreach($roles as $role) {
                if(!isset($flatRoles[$role])) {
                    $flatRoles[$role] = $role;
                }
            }
        }

        return $flatRoles;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('username', null, array(
                'label' => $this->label_username
            ))
            ->add('email', null, array(
                'label' => $this->label_email
            ))
            ->add('password', null, array(
                'label' => $this->label_password
            ))
            ->add('lastLogin', null, array(
                'label' => $this->label_lastLogin
            ))
            ->add('roles', null, array(
                'label' => $this->label_roles
            ))
        ;
    }
}
