<?php


namespace App\Src\Modules\ApiModule;


class Videos extends Api
{

    protected function createUrl(): string
    {
        return "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId="
            .$this->additional_param."&maxResults=100&key=".$this->config_data['my_token'];
    }
}