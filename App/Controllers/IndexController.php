<?php
    /**
     * Created by PhpStorm.
     * User: lucas.vieira
     * Date: 05/02/2018
     * Time: 15:50
     */

    namespace App\Controllers;

    use SON\Controller\Action;
    use SON\DI\Container;

    class IndexController extends Action
    {
         public function index()
        {

           $client = Container::getModel("Client");
           $this->view->clients = $client->fetchAll();

            $this->render("index");

        }

        public function contact()
        {
            $this->view->cars = array(
                "mustang",
                "ferrari",
            );
            $this->render("contact");
        }
    }