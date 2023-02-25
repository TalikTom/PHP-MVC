<?php


class View
{

    private $template;

    public function __construct($template='template')
    {
        $this->template = $template;
    }

    public function render($view, $parameters=[])
    {
        $viewFile = BP. 'views' .
            DIRECTORY_SEPARATOR . $view . '.view' . '.php';

//        echo $viewFile;
        ob_start();
        extract($parameters);
        if(file_exists($viewFile)){
            include_once $viewFile;
        }else{
            include_once BP . 'views' .
                DIRECTORY_SEPARATOR .  'errorViewFile.phtml';
        }
        $content=ob_get_clean();
        include_once BP . 'views' . DIRECTORY_SEPARATOR
            . $this->template . '.php';
    }



}