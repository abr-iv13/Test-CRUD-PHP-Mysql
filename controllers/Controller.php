<?php

class Controller
{
    protected $smarty;
    
    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->template_dir = './smarty/templates';
        $this->smarty->compile_dir = './smarty/templates_c';
        $this->smarty->config_dir = './smarty/configs';
        $this->smarty->cache_dir = './smarty/cache';
    }

    public function pageNotFound () {
        header("HTTP/1.0 404 Not Found");
        $this->smarty->display('404.tpl');
        exit();
    }
}
