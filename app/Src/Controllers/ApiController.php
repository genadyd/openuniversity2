<?php


namespace App\Src\Controllers;


use App\Src\Modules\ApiModule\Videos;

class ApiController
{
    public static function getPlaylistVideos($playlist_id){
        $videos_class = new Videos($playlist_id);
        echo $videos_class->getData();
    }

}