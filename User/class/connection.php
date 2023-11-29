<?php

    class dbh{
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $name = "hr";

        public function connect(){
            
            try {
                $res = mysqli_connect($this->host,$this->user,$this->pass,$this->name);
                return $res;
            } catch (mysqli_sql_exception) {
                echo "error";
            }
            return $res;
        }
    }

