<?php

namespace SspTalks\Controller;

use SspTalks\Model\SessionsTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use League\CommonMark\CommonMarkConverter;

class TalksController extends AbstractActionController
{
    protected $sessionsTable;

    public function __construct(SessionsTable $sessionsTable)
    {
        $this->sessionsTable = $sessionsTable;
    }

    public function talksAction()
    {
        $sessions = $this->sessionsTable->getSessions('talk');

        return new ViewModel(array('sessions' => $sessions));
    }

    public function keynotesAction()
    {
//        $sessions = $this->sessionsTable->getSessions('keynote');

//        return new ViewModel(array('sessions' => $sessions));
        return array();
    }

    public function tutorialsAction()
    {
        $sessions = $this->sessionsTable->getSessions('tutorial');

        return new ViewModel(array('sessions' => $sessions));
    }

    public function speakersAction()
    {
        $sessions = $this->sessionsTable->getSpeakers();

        $commonMark = new CommonMarkConverter();

        return new ViewModel(array('sessions' => $sessions, 'commonMark' => $commonMark));
    }

    public function scheduleAction()
    {
        $this->layout('layout/layout_no_sidebar');

        $sessions = $this->sessionsTable->getSessions();

        return new ViewModel(array('sessions' => $sessions));
    }
}
