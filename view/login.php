<?php 
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/87b021b4fa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/register.css">
    <?php 
        if(!empty($_SESSION["errl"])){
            ?><style>.err{display: block;}</style><?php
        }
        
    ?>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
            <div class="link">
            
        </div>
        <form action="../index.php" method="post" class="form">

            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">

            <div class="msg-container">

            <p class="err email-err"><?php if(isset($_SESSION["errl"])){echo $_SESSION["errl"]; unset($_SESSION['errl']);}?></p>

            </div>
            <input type="submit" name="login" value="Log In">       
        </form>
    </div>
    <footer>
        <div class="foot">
            <div class="smedia">
                <a href=""><i class="fa-brands fa-facebook-f fa-xl" style="color: #ffffff;"></i></a>
                <a href=""><i class="fa-brands fa-instagram fa-xl" style="color: #ffffff;"></i></a>
                <a href=""><i class="fa-brands fa-twitter fa-xl" style="color: #ffffff;"></i></a>
                <a href=""><i class="fa-brands fa-youtube fa-xl" style="color: #ffffff;"></i></a>
                
            </div>
            <span>Copyright © HRms 2023. All rights rakenroll.</span>
        </div>
    </footer>
</body>
</html>