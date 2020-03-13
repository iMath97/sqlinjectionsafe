<?php

    class DBConnection {
        private $host = "127.0.0.1";
        private $user = "root";
        private $pw = "";
        private $dbname = "sqlinjectionsafe";

        function connect(){
            $data = "mysql:host=$this->host; dbname=$this->dbname;";
            $con = new PDO($data, $this->user, $this->pw);
            $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $con;
        }
    }

?>