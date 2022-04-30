<?php


namespace App\Src\Modules\Views;


class Views implements IViews
{
    private array $templates;
    private array $template_data;
    private string $templates_dir;
    private string $styles_dir;
    private string $styles;
    public function __construct()
    {
        $this->templates = [];
        $this->template_data = []; /* general data for all included templates */
        $this->templates_dir = '../templates/';
        $this->styles_dir = '/css/';
        $this->styles = '';
    }

    /**
     * @param string $template_url the template URL without main directory URL,
     * The main directory defined in "$this->templates_dir"
     * We have a opportunity define the url with extension and without extension.
     *
     * @param array $data here we can to attach some data for the a specific component
     */
    public function addTemplate(string $template_url, array $data =[]): void
    {
        $template_url = str_replace('.php','',trim($template_url, '/'));
        $template = $this->templates_dir.$template_url.'.php';
        if(file_exists($template)){
            $this->templates[] = array(
                'template' =>$template,
                'data' => $data
            ) ;
        }
    }

    /**
     * @param array $styles_urls urls css files
     * @return string
     */
    public function attachStyles(array $styles_urls = []):void
    {
        foreach ($styles_urls as $url){
            $url = preg_replace('/\.[a-z]+$/i','',$url);
            $this->styles .= '<link rel="stylesheet" href="'.$this->styles_dir.trim($url, '/').'.css"\>';
        }
    }

    /**
     * @param array $data
     * set general data for all included templates
     */
    public function attachData(array $data): void
    {
        if(count($this->template_data)===0) $this->template_data = $data;
    }

    public function get(): string|array
    {
        ob_start();
        $styles = $this->styles;
        $general_data = $this->template_data;
        foreach ($this->templates as $template){
            $data = $template['data'];
            include($template['template']);
        }
        return ob_get_clean();
    }
}