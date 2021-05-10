<?php

namespace Models;
require_once('../models/Conta.php');

class ContaPJ extends Conta {

    private static $limit = 2500.00;

    function __construct($id, $owner)
    {
        parent::__construct($id, $owner, ContaPJ::$limit);
    }
}