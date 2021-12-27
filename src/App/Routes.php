<?php

use Slim\Routing\RouteCollectorProxy;

$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/citas','App\Controllers\CitasController:getAll');
    $group->get('/citas2','App\Controllers\CitasController:getAll2');
});

$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/facturas','App\Controllers\FacturasController:getAll');
});