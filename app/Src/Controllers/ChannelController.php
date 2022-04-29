<?php


namespace App\Src\Controllers;


use App\Src\Modules\Views\Views;

class ChannelController
{
    public function index(){
        $views = new Views();
        $views->addTemplate('layouts/head');
        $views->addTemplate('layouts/footer');
        $views->attachData(['title' =>"Genady", 'heading' => "Genady Heading"]);
        echo($views->get());
    }

}