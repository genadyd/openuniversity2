<?php


namespace App\Src\Modules\Views;


interface IViews
{
    public function addTemplate(string $template_url, array $data=[]) :void;
    public function attachData(array $data):void;
    public function get():string|array;

}