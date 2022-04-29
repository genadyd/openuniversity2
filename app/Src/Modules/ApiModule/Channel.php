<?php


namespace App\Src\Modules\ApiModule;


class Channel extends Api
{
    protected function createUrl(): string
    {
        return "https://www.googleapis.com/youtube/v3/channels?part=snippet&id="
            .$this->config_data['channel_id']."&key=".$this->config_data['my_token'];
    }
}