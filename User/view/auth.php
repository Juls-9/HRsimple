<?php 

session_start();

if(!isset($_SESSION["user_idsd"])){
    
    header("location:../../view/login.php");
    session_start();
    unset($_SESSION["user_ids"]);
    session_destroy();
    header('Location: /HR/view/login.php');
exit;
}
?>