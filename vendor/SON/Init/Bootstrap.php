<?php
    /**
     * Created by PhpStorm.
     * User: lucas.vieira
     * Date: 05/02/2018
     * Time: 17:23
     */

    namespace SON\Init;
    abstract class Bootstrap
    {
        private $route;

        function __construct()
        {
            $this->initRoutes();
            $this->run($this->getUrl());
        }

        abstract protected function initRoutes();

        protected function getUrl()
        {
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }

        protected  function run($url)
        {

            array_walk($this->route, function ($route) use ($url) {

                if ($url == $route['route']) {
                    $class = "APP\\Controllers\\" . ucfirst($route['controller']);
                    $controller = new $class;
                    $action = $route['action'];
                    $controller->$action();

                }
            });
        }

        protected function setRoutes(Array $routes)
        {
            $this->route = $routes;
        }
    }