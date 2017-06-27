<?php

return new \Phalcon\Config(
    [
        'database' => [
            'adapter' => 'Postgresql',
            'host' => 'localhost',
            'port' => 5432,
            'username' => 'postgres',
            'password' => '12345',
            'dbname' => 'articledemo',
        ],

        'application' => [
            'controllersDir' => "app/controllers/",
            'modelsDir' => "app/models/",
            'baseUri' => "/",
        ],
    ]
);