<?php

$container->set('db_settings', function(){
    return (object)[
        "DB_HOST" => "localhost",
        "DB_NAME" => "db_Facturacion",
        "DB_USER" => "root",
        "DB_PASS" => "",
        "DB_CHARSET" => "utf8"
    ];
});