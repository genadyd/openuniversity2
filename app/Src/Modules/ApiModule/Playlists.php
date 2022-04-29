<?php


namespace App\Src\Modules\ApiModule;


class Playlists extends Api
{

    protected function createUrl(): string
    {
        return "https://www.googleapis.com/youtube/v3/playlists?part=snippet&channelId="
            .$this->config_data['channel_id']."&key=".$this->config_data['my_token'];
    }
}