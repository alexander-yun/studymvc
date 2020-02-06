<?php


namespace Models;


class Route
{
    // route is array of string with two keys
    // controller and action
    private $route;
    private $controllerName;
    private $actionName;

    public function __construct(string $path){
        // Получаем URL запроса
        $path = $_SERVER['REQUEST_URI'];
        // Разбиваем URL на части
        $pathParts = explode('/', $path);
        // Получаем имя контроллера
        $controller = $pathParts[1];
        // Получаем имя действия
        $action = $pathParts[2];
        // Формируем пространство имен для контроллера
        $this->route['controller'] = 'Controllers\\' . $controller . 'Controller';
        // Формируем наименование действия
        $this->route['action'] = 'action' . ucfirst($action);
    }

    /**
     * @return mixed
     */
    public function getRoute()
    {
        return $this->route;
    }

    public function isValid(){
        // Если класса не существует, выбрасывем исключение
        if (!class_exists($this->route['controller'])) {
            throw new \ErrorException('Controller does not exist');
            return false;
        }
        // Создаем экземпляр класса контроллера
        $objController = new $this->route['controller'];

        // Если действия у контроллера не существует, выбрасываем исключение
        if (!method_exists( $objController, $this->route['action'])) {
            throw new \ErrorException('action does not exist');
            return false;
        }
        return true;
    }
}