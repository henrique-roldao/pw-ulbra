<?php

    class clientsModel{
        var $result;
        var $conn;

        public function __construct()
        {
            require_once('database/ConnectClass.php');
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $this -> conn = $Oconn ->getConn();

        }
        public function getClients() {
 
            $sql = 'SELECT * FROM clients';

            $this -> result = $this -> conn -> query($sql);

        }

        public function insertClient($arrayClient) //inseir dados no array pro banco
        {
            $sql = "
                INSERT INTO clients
                    (name, phone, email, address)
                VALUES(
                    '{$arrayClient['name']}',
                    '{$arrayClient['phone']}',
                    '{$arrayClient['email']}',
                    '{$arrayClient['address']}'
                )
            ";

            $this -> conn -> query($sql);
        }

        public function getConsult(){
            return $this -> result;
        }
    }
