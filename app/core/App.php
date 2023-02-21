<?php

class App{

    public static function start(){


        $route = Request::getRoute();

        Log::info($route);

        $parts = explode('/',substr($route,1));

        Log::info($parts);

        
        $controller='';
        if(!isset($parts[0]) || $parts[0]===''){
            $controller='IndexController';
        }else{
            $controller = ucfirst($parts[0]) . 'Controller';
        }

        Log::info($controller);



        $method='';
        if(!isset($parts[1]) || $parts[1]==='' ){
            $method='index';
        }else{
            $method=$parts[1];
        }

        Log::info($method);

        if(!(class_exists($controller) && method_exists($controller,$method))){
            echo 'No exist ' . $controller . '-&gt;' . $method;
            return;
        }

        $instance = new $controller();
        $instance->$method();


    }

}