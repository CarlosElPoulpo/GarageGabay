<?php

namespace AppBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class HomePageAdminController extends CRUDController
{
    public function listAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:HomePage');
        $homepage = $repository->findOneBy([]);

        return new RedirectResponse($this->admin->generateUrl('edit', array('id'=>$homepage->getId())));
    }
}
