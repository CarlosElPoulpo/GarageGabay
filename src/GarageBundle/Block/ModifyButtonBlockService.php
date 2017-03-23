<?php

namespace GarageBundle\Block;

use Sonata\AdminBundle\Admin\Pool;
use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Block\Service\AbstractBlockService;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModifyButtonBlockService extends AbstractBlockService
{
    protected $pool;

    /**
     * @param string          $name
     * @param EngineInterface $templating
     * @param Pool            $pool
     */
    public function __construct($name, EngineInterface $templating, Pool $pool)
    {
        parent::__construct($name, $templating);

        $this->pool = $pool;
    }

    /**
     * {@inheritdoc}
     */
    public function execute(BlockContextInterface $blockContext, Response $response = null)
    {
        $dashboardGroups = $this->pool->getDashboardGroups();

        $settings = $blockContext->getSettings();

        $visibleGroups = array();
        foreach ($dashboardGroups as $name => $dashboardGroup) {
            if (!$settings['groups'] || in_array($name, $settings['groups'])) {
                $visibleGroups[] = $dashboardGroup;
            }
        }

        return $this->renderPrivateResponse(":admin:modify_button_block.html.twig", array(
            'block' => $blockContext->getBlock(),
            'settings' => $settings,
            'admin_pool' => $this->pool,
            'groups' => $visibleGroups,
        ), $response);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'Admin List';
    }

    /**
     * {@inheritdoc}
     */
    public function configureSettings(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'groups' => false,
        ));

        // Symfony < 2.6 BC
        if (method_exists($resolver, 'setNormalizer')) {
            $resolver->setAllowedTypes('groups', array('bool', 'array'));
        } else {
            $resolver->setAllowedTypes(array(
                'groups' => array('bool', 'array'),
            ));
        }
    }
}
