<?php

session_start();
unset($_SESSION["user_ids"]);
session_destroy();
header('Location: /HR/view/login.php');
exit;