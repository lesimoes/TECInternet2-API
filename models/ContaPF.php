<?php

namespace Models;
require_once('../models/Conta.php');

class ContaPF extends Conta {

    private static $limit = 1000.00;

    function __construct($id, $owner)
    {
        parent::__construct($id, $owner, ContaPF::$limit);
    }
}