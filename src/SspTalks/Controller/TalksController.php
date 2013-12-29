<?php

namespace SspTalks\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class TalksController extends AbstractActionController
{
    public function talksAction()
    {
        return array();
    }

    public function tutorialsAction()
    {
        return array();
    }

    public function speakersAction()
    {
        return array();
    }

    public function scheduleAction()
    {
        $this->layout('layout/layout_no_sidebar');
        
        return array();
    }
}
