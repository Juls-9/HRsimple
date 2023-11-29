<?php 

    require_once 'connection.php';

    class addUser extends dbh{ 

        public function addUsers($user, $pass, $userType){

            $sql = "INSERT INTO user_tbl(username, password, user_type) VALUES('$user','$pass','$userType')";

            try {
                mysqli_query($this->connect(),$sql);
                header("location:view/admin.php");
            } catch (mysqli_sql_exception) {
                echo "error";
            }


        }

    }