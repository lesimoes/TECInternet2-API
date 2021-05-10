<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once('../models/ContaPF.php');
use Models\ContaPF;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri);
$method = $_SERVER['REQUEST_METHOD'];

$contas = array(new ContaPF(113, "Silva"), new ContaPF(11, "Winglerson"));

// RETORNAR POR ID
if (!empty($uri[3]) && $method === 'GET') {
    
    $contaId = $uri[3];
    $conta = $contas[$contaId];
    $result[] = array('id' => $conta->getId(), 'owner' => $conta->getOwner()); 
    print_r(json_encode($result));
    http_response_code(200);
} 
// LISTAR
if (empty($uri[3]) && $method === 'GET') {
    $result = array();
    foreach($contas as $conta) {
        $result[] = array('id' => $conta->getId(), 'owner' => $conta->getOwner());   
    }
    print_r(json_encode($result));
    http_response_code(200);
} 

if (!empty($uri[3]) && $method === 'POST') {
    $result = array();

    print_r(json_encode($result));
    http_response_code(200);
}