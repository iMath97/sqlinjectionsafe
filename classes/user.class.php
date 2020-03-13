<?php
    include_once "./classes/dbConnection.class.php";


    class User extends DBConnection {
        function newuser($username, $password){
            $con = new dbConnection();

            $sql = $con->connect()->prepare("INSERT INTO users (username, password) VALUES(?, ?);");
            $input = [$username, $password];
            $sql->execute($input);
            return $sql;
        }

        function getusers(){
            $con = new dbConnection();

            $sql = $con->connect()->query("SELECT * FROM users");
            return $sql;
        }

        function getdata($username){
            $con = new dbConnection();

            $sql = $con->connect()->prepare("SELECT * FROM users WHERE username=?");
            $input = [$username];
            $sql->execute($input);
            return $sql;
        }
    }

    
?>