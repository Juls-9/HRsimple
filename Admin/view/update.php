<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/addEmployee.css">
    <title>Document</title>
</head>
<body>
    <div class="up-main-container" id="update">
        <div class="up-container">
            <div class="up">
                
                <h3>Update Employee</h3>
                <form action="../index.php" method="post" id="form-update-user">
                    <input type="text" name="ids">
                    <input type="text" value="<?php echo $a["firstname"]; ?>">
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <input type="submit" value="Submit" class="up-btn">
                </form>
            </div>
        </div>
    </div>
</body>
</html>