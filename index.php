<?php


    if(isset($_POST["login"])){
        $user = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $pass = filter_input(INPUT_POST,"password",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        include "class/addUser.php";
        include "inc/addUserinc.php";
        if(empty($user) || empty($pass)){

            session_start(); 
                $_SESSION["errl"] = "Fill up form";
                header("location:view/login.php");
        }else{
            
            $ae = new userControll();
            $ae->checkUser($user,$pass);

        }
    }