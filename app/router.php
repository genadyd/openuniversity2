<?php

use Bramus\Router\Router;

$router = new Router();

$router->get('/', function() {
    echo 'jkjlkj';
});
$router->get('/test', function() {
    echo 'test';
});

$router->run();
