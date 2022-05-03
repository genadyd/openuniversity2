<?php


namespace App\Src\Controllers;


use App\Src\Modules\Views\Views;

class VideoController
{
    public function index($video_id){
        $views = new Views();
        $views->addTemplate('layouts/head');
        $views->addTemplate('components/header');
        $views->addTemplate('components/video_player',['id'=>$video_id]);
        $views->addTemplate('layouts/footer');
        $views->attachData(['title' => "OU Play Video "]);
        $views->attachStyles(['/app.css', 'video_player']);
        echo($views->get());
    }

}