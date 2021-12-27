<?php namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\BaseController;

class FacturasController extends BaseController{
    public function getAll($request, $response, $args){
        //$headerValueString = $request->getHeaderLine('Authorization');
        //$data = array('Authorization' => $headerValueString);
        //$payload = json_encode($data);
        $configuraciones = $this->container->get('db_settings');
        $configuraciones = json_encode($configuraciones);
        $response->getBody()->write($configuraciones);
        return $response->withHeader('Content-Type', 'application/json');
    }
}