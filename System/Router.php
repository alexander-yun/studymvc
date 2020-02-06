<?php

namespace System;

/**
 * Главный класс приложения
 * 
 * @author farza
 */
class Router
{
    /**
     * Запуск приложения
     * 
     * @author farZa
     * @throws \ErrorException
     */


    public static function run()
    {
        $route = new \Models\Route($_SERVER['REQUEST_URI']);
        $controllerName = $route->getRoute()['controller'];
        $actionName = $route->getRoute()['action'];
        $objController = (new $controllerName)->$actionName();
    }
}

