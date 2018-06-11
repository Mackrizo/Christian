<?php
namespace controller;

class Controller
{
    protected $viewPath;
    protected $template;
    
    public function __construct()
    {
        $this->viewPath = ROOT . 'views/';
    }
    
    public function render($view){
        
        ob_start();
        require( $view = $this->viewPath.str_replace('.', '/', $view). '.php');
        $content = ob_get_clean();
        require($this->viewpath . 'templates/' . $this->$template . '.php');
    }
}

