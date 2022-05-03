<?php


namespace App\Src\Controllers;


use App\Src\Modules\ApiModule\Channel;
use App\Src\Modules\ApiModule\Playlists;
use App\Src\Modules\Views\Views;

class ChannelController
{
    public function index()
    {
        $views = new Views();
        $views->addTemplate('layouts/head');
        $views->addTemplate('components/header');
        $channel = new Channel();
        $channel_data = $channel->getArrayData();
        $views->addTemplate('components/channel_data_section', $channel_data);
        $playlists = new Playlists();
        $playlists_array = $playlists->getArrayData()['items'];
        foreach ($playlists_array as $playlist_data) {
            $views->addTemplate('components/playlists_section', $playlist_data);
        }
        $views->addTemplate('layouts/footer');
        $views->attachData(['title' => "OU videos service ", 'heading' => "Genady Heading"]);
        $views->attachStyles(['/app.css', 'channel']);
        $views->attachScripts(['/app'], true);
        echo($views->get());
    }

}