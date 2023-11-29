<?php

session_start();
unset($_SESSION["user_idsd"]);
session_destroy();
header('Location: /HR/view/login.php');
exit;