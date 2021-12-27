<?php namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class FacturasController{
    public function getAll($request, $response, $args){
        $headerValueString = $request->getHeaderLine('Authorization');
        $data = array('Authorization' => $headerValueString);
        $payload = json_encode($data);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');;
    }
}