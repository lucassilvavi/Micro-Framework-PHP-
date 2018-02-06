<?php
    /**
     * Created by PhpStorm.
     * User: lucas.vieira
     * Date: 06/02/2018
     * Time: 16:43
     */

    namespace SON\Model;


    abstract class Table
    {
        protected $db;
        protected $table;


        public function __construct(\PDO $db)
        {
            $this->db = $db;

        }

        public function fetchAll()
        {
            $query = "select * from {$this->table}";
            return $this->db->query($query);
        }
        public function find($id){
            $query = "select * from {$this->table} where id = :id";
            $smt =$this->db->prepare($query);
            $smt->bindParam(":id",$id);
             $smt->execute();
            return $smt->fetch(\PDO::FETCH_ASSOC);

        }
    }