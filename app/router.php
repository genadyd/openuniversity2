<?php


use App\Src\Controllers\ApiController;
use App\Src\Controllers\VideoController;
use Bramus\Router\Router;
use App\Src\Modules\ApiModule\Channel;

$router = new Router();

$router->get('/', function() {
    $controller = new \App\Src\Controllers\ChannelController();
    $controller->index();
});
$router->get('/api/playlist/{[a-zA-Z\d_-]+}/{[a-z\d]+}', function($playlist_id, $token) {
    if($token === $_SESSION['token']) {
        $controller = new ApiController();
        $controller->getPlaylistVideos($playlist_id);
    }
});
$router->get('video/{[a-zA-Z\d_-]+}', function($video_id) {
    $controller = new VideoController();
    $controller->index($video_id);
});


$router->run();
