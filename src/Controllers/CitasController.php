<?php namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CitasController{
    public function getAll($request, $response, $args){
        $response->getBody()->write("Hello world 2!");
        return $response;
    }
    public function getAll2($request, $response, $args){
        $response->getBody()->write("Hello world otro metodo!");
        return $response;
    }
}