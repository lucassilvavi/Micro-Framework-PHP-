<?php
    /**
     * Created by PhpStorm.
     * User: lucas.vieira
     * Date: 06/02/2018
     * Time: 15:11
     */

    namespace APP;


    class Conn
    {
        public static function getDb()
        {
            return new \PDO("mysql:host=localhost;dbname=mvc","root","");
        }
    }