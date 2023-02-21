<?php
session_start();
$_SESSION['auth']= isset($_SESSION['auth']) ? $_SESSION['auth'] : '';
require_once 'functions.php';
require_once 'Response.php';
require_once 'router.php';


define('BP',__DIR__ . DIRECTORY_SEPARATOR);
define('BP_APP', BP . 'app' . DIRECTORY_SEPARATOR);

$forAutoLoad=[
    BP_APP . 'controller',
    BP_APP . 'core',
    BP_APP . 'model'
];


$paths = implode(PATH_SEPARATOR,$forAutoLoad);

set_include_path($paths);

spl_autoload_register(function($class){

    $paths = explode(PATH_SEPARATOR,get_include_path());
    foreach($paths as $path){

        $datoteka = $path . DIRECTORY_SEPARATOR .
            $class . '.php';

        if(file_exists($file)){
            require_once $file;
            break;
        }
    }
});

App::start();

