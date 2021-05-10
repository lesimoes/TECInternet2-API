<?php

namespace Models;

class Conta {

    private $id;
    private $owner;
    private $limit;
    
    function __construct($id, $owner, $limit)
    {
        $this->setId($id);
        $this->setOwner($owner);
        $this->setLimit($limit);
    }

    public function getId () 
    {
        return $this->id;
    }

    private function setId ($id) 
    {
        $this->id = $id;
    }

    public function getOwner () 
    {
        return $this->owner;
    }

    private function setOwner ($owner) 
    {
        $this->owner = $owner;
    }

    public function getLimit () 
    {
        return $this->limit;
    }

    private function setLimit ($limit) 
    {
        $this->limit = $limit;
    }

}