<?php

namespace Api\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\ViewModel;

class ApiController extends AbstractRestfulController
{
    public function addtopathAction()
    {
        $twitterhandle = $this->getEvent()->getRouteMatch()->getParam('twitterhandle');

        $vars = array('th' =>$twitterhandle);

        return new ViewModel($vars);
    }

    public function getpathhistoryAction()
    {
        //return new ViewModel();
    }
}