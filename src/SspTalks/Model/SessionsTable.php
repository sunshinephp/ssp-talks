<?php

namespace SspTalks\Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Select;

class SessionsTable
{
    protected $tableGateway;

    public function __construct(Adapter $adapter)
    {
        $this->tableGateway = new TableGateway('sessions', $adapter);
    }

    public function getTalks()
    {
        $row = $this->tableGateway->select(function (Select $select) {
            $select->where('type = "talk"');
            $select->order('title ASC');
        });

        return $row->toArray();
    }

    public function getTutorials()
    {
        $row = $this->tableGateway->select(function (Select $select) {
            $select->where('type = "tutorial"');
            $select->order('title ASC');
        });

        return $row->toArray();
    }

    public function getSpeakers()
    {
        $row = $this->tableGateway->select(function (Select $select) {
            $select->order(array('first_name ASC', 'last_name ASC', 'type ASC' ));
        });

        return $row->toArray();
    }
}
