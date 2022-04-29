<?php
namespace App\Src\Modules\ApiModule;


use mysql_xdevapi\Exception;

abstract class Api
{
    protected array $data; /*result data*/
    protected array $config_data;

    /**
     * Api constructor.
     * @param string|null $additional_param
     * $additional_param: Playlist_id or Video_id
     */
    public function __construct(protected string|null $additional_param = null )
    {
        require_once "../config/config.php";/*get config data*/
        /** @var TYPE_NAME $api_config */
        $this->config_data = $api_config;
    }

    /**
     * @return string
     * API Url builder.
     * For all children class this method should be reloaded
     * Because different signature of the URL
     */
    abstract protected function createUrl():string ;

    /**
     * @return array|null
     * Get data
     */
    public function getData():array|null
    {
        try{
            $json = file_get_contents($this->createUrl());
            return json_decode($json, true);
        }catch (Exception $e){
            echo 'Message: ' .$e->getMessage();
        }
    }



}