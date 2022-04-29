<?php


use Bramus\Router\Router;
use App\Src\Modules\ApiModule\Channel;

$router = new Router();

$router->get('/', function() {
    $channel = new \App\Src\Modules\ApiModule\Videos("PLOzb-otnODaPJMY8CwTrobsA8brXR_oM-");
    var_dump($channel->getData());
});
$router->get('/test', function() {
    echo 'test';
});

$router->run();
