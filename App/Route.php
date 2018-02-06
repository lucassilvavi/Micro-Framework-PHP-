<?php
    /**
     * Created by PhpStorm.
     * User: lucas.vieira
     * Date: 05/02/2018
     * Time: 15:03
     */

    namespace App;


    use SON\Init\Bootstrap;

    class Route extends Bootstrap
    {

        protected function initRoutes()
        {
            $routes['home'] = array(
                "route"      => "/",
                "controller" => "indexController",
                "action"     => "index");

            $routes['contact'] = array(
                "route"      => "/contact",
                "controller" => "indexController",
                "action"     => "contact");
            $this->setRoutes($routes);
        }

    }