<?php
    /**
     * Created by PhpStorm.
     * User: lucas.vieira
     * Date: 06/02/2018
     * Time: 15:29
     */

    namespace SON\DI;


    use APP\Conn;

    class Container
    {
        public static function getModel($model)
        {
            $class = "\\APP\\Models\\" . ucfirst($model);
            return new $class(Conn::getDb());
        }
    }