<?php

namespace GarageBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class GarageAdminController extends CRUDController
{
    public function modifyAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('GarageBundle:Garage');
        $garage = $repository->findOneBy([]);

        return new RedirectResponse($this->admin->generateUrl('edit', array('id'=>$garage->getId())));
    }
}
