<?php 
include "class/addEmployee.php";
include "class/addUser.php";
include "inc/addEmployee.php";
include "inc/addUser.php";

    
    if(isset($_POST["sub"])){
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
        $cpassword = $_POST["cpassword"];
        $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
        session_start();
        if(empty($username)){
            
            $_SESSION["sccs"] = "";
            $_SESSION["err"] = "Username is empty";
            header("location:view/register.php");
        }elseif(empty($password)){
            $_SESSION["sccs"] = "";
            $_SESSION["err"] = "Password is empty";
            header("location:view/register.php");
        }
        elseif(empty($cpassword)){
            $_SESSION["sccs"] = "";
            $_SESSION["err"] = "Confirn password";
            header("location:view/register.php");
        }elseif(empty($email)){
            $_SESSION["sccs"] = "";
            $_SESSION["err"] = "Email is empty";
            header("location:view/register.php");
        }elseif($cpassword != $password){
            $_SESSION["sccs"] = "";
            $_SESSION["err"] = "Password not match!";
            header("location:view/register.php");
        }elseif($username || $password || $email){
            $_SESSION["err"] = "";
            $_SESSION["sccs"] = "Registered Success! please login";
            header("location:view/register.php");
        }
    }
    
    if(isset($_POST["log"])){
        $user = filter_input(INPUT_POST,"user",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $pass = $_POST["pass"];
        session_start();
        if(empty($user)){
            $_SESSION["errl"] = "Username is empty";
            header("location:view/login.php");
        }elseif(empty($pass)){
            $_SESSION["errl"] = "Password is empty";
            header("location:view/login.php");
        }else{
            header("location:view/analytics.php");
        }
    }
    //ADD EMPLOYEE TO DATABASE
    if(isset($_POST["addemp"])){
        $fname = filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_SPECIAL_CHARS);
        $lname = filter_input(INPUT_POST, "lastname", FILTER_SANITIZE_SPECIAL_CHARS);
        $mname = filter_input(INPUT_POST, "middlename", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $hdate = filter_input(INPUT_POST, "hdate", FILTER_SANITIZE_SPECIAL_CHARS);
        $salary = filter_input(INPUT_POST, "salary", FILTER_SANITIZE_SPECIAL_CHARS);
        $dp = filter_input(INPUT_POST, "dp", FILTER_SANITIZE_SPECIAL_CHARS);
        $pass = password_hash($_POST["password"],PASSWORD_DEFAULT);
        

        $ae = new addEmp();
        $ae->addEmp($fname, $lname, $mname, $email, $pass, $hdate, $salary, $dp);
    }
    //DELETE DATA FROM DATABASE
    if(isset($_POST["del-frm"])){
       $id = $_POST["id"];
        $ae = new addEmp();
        $ae->delData($id);
    }
    //UPDATE DATA
    if(isset($_POST["upd"])){

    }
    
    //ADD USER

    if(isset($_POST["adduser"])){
        $user = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $userType = filter_input(INPUT_POST,"userType",FILTER_SANITIZE_SPECIAL_CHARS);
        $pass = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);;

        $add = new userControll();
        $add->addUser($user, $pass, $userType);
    }
    
      
?>