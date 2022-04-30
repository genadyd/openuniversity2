<?php


use Bramus\Router\Router;
use App\Src\Modules\ApiModule\Channel;

$router = new Router();

$router->get('/', function() {
    $controller = new \App\Src\Controllers\ChannelController();
    $controller->index();
});
$router->get('/test', function() {
    echo 'test';
});

$router->run();
