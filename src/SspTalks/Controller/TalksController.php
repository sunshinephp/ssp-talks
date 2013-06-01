<?php

namespace SspTalks\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class TalksController extends AbstractActionController
{
    public function indexAction()
    {
        echo 'talks-controller-test';
        
        return array();
    }

    public function fooAction()
    {
        return array();
    }
}
