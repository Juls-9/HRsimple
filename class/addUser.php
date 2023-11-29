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

        public function logUser($user, $pass){
            $sql = "SELECT * FROM user_tbl WHERE username='$user'";
            $result = mysqli_query($this->connect(),$sql);

            if(mysqli_num_rows($result) > 0){
                session_start();
                $rows = mysqli_fetch_assoc($result);
                $id = $rows["user_id"];
                $users = $rows["username"];
                $passw = $rows["password"];
                $type = $rows["user_type"];

                $_SESSION["pass"] = $passw;
                $_SESSION["type"] = $type;

                if($pass === $_SESSION["pass"]){
                    if($type == 1){
                        session_start();
                        $_SESSION["user_ids"] = $id;
                        header("location:Admin/view/analytics.php");
                        exit;
                    }else{
                        session_start();
                        $_SESSION["user_idsd"] = $id;
                        header("location:User/view/analytics.php");
                        exit;
                    }
                }else{
                    session_start(); 
                    $_SESSION["errl"] = "Password is Incorrect";
                    header("location:view/login.php");
                }
                
            }else{
                session_start(); 
                $_SESSION["errl"] = "Username is esssmpty";
                header("location:view/login.php");
            }
            
            
        }

    }