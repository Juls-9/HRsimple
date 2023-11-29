<?php include "../inc/addEmployee.php"; 
require_once "auth.php";
 
    $ae = new addEmp(); 
    $data = $ae->viewEmployee();
    
    $upData = $ae->getData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>

    <?php 
        if(!empty($_SESSION["err"])){
            ?><style>.err{display: block;}</style><?php
        }
        if(!empty($_SESSION["sccs"])){
            ?><style>.sccs{display: block;}</style><?php
        }

       
        
        
        
    ?>
    
</head>
<body>
<?php include("sidebar.php"); ?>

<div class="containers">
    <!--CONTENT AREA "CARDS"-->
    <a href="#" style="text-decoration:none;"><div class="items item1s"><i class="fa-solid fa-user fa-2xl" style="color: #081935;"></i> &nbsp;Users &nbsp; 69</div>     </a>
    <a href="#" style="text-decoration:none;"><div class="items item2s"><i class="fa-solid fa-address-card fa-2xl" style="color: #081935;"></i> &nbsp;Employees</div>   </a>
    <a href="#" style="text-decoration:none;"><div class="items item3s"><i class="fa-solid fa-envelope fa-2xl" style="color: #081935;"></i> &nbsp;New Applicant</div>   </a>
    <a href="#" style="text-decoration:none;"><div class="items item4s"><i class="fa-solid fa-bars-progress fa-2xl" style="color: #081935;"></i> &nbsp;Request</div>     </a>
  </div>
  <div class="contain-tbl">
    <!--SEARCH BUTTON-->
        
        
            <div class="btn">
                <a href="#popup" id="btn1">Add User</a>
                <h1>EMPLOYEE LIST</h1>
            </div>
            
        <!--TABLES-->
        <div class="box">    
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>User Type</th>
                        <th>Action</th>
                    </tr>
                <tbody>
                    <?php foreach($data as $dt)
                    
                    {
                    ?>
                    <tr>
                        <td><?php echo "hrs".$dt["id"];?></td>
                        <td class="nm"><?php echo $dt["firstname"]." ".$dt["lastname"];?></td>
                        <td><?php echo $dt["hire_date"];?></td>
                        
                        <td>
                        <button type="button" data-id="<?php echo $dt["id"];?>"  class="act2 act" onclick="confirmDelete(this);"><i class="fa-solid fa-trash fa-sm" style="color: #ffffff;"></i></button></td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
        <div class="txt" style="color: gray; text-align:center;">EMPLOYEES TABLES FOR COMPANY</div>
    </div>
    <!--ADD EMPLOYEE MODAL-->
    <div class="add-pg" id="popup">
        <div class="add-container">
                    <h2>ADD EMPLOYEE</h2>
                    <a href="#" id="cls-btn" name="bck">back</a>
                <form action="../index.php" method="post">
                    <input type="text" name="username" placeholder="username">
                    <input type="password" name="password" placeholder="password">
                    <label for="">User</label>
                    <input type="radio" name="userType" value="2">
                    <label for="">Admin</label>
                    <input type="radio" name="userType" value="1">
                    <input type="submit" name="adduser" value="Add" id="add-btn">
                </form>
        </div>
    </div>
    <!--DELETE NOTIF MODAL-->
    <div class="deletenotif mod" id="delt">
        <div class="del-container">
            
            <div class="del-btn">
                <h3>Are you sure you want to delete</h3>
                <div class="del">

                    <form method="POST" action="../index.php" id="form-delete-user">
                        <input type="hidden" name="id">
                        <button type="button" id="btn-d" class="cls-btn2 dl" data-dismiss="modal">Close</button>
                        <button type="submit" name="del-frm" form="form-delete-user" class="c-btn dl">Delete</button>
                    </form>

                    
                    
                </div>
            </div>
        </div>
    </div>
    <!--UPDATE MODAL-->
    <script>

    function confirmDelete(self) {
        var id = self.getAttribute("data-id");
 
        document.getElementById("form-delete-user").id.value = id;
        $("#delt").modal("show");

        //UPDATE
    }
    function confirmUpdate(self) {
            var ids = self.getAttribute("data-id");
            var name = self.getAttribute("data-name");
            var idssd = self.getAttribute("data-val");

            document.getElementById("form-update-user").ids.value = ids;
            document.getElementById("form-update-user").name.value = name;
            document.getElementById("form-update-user").idssd.value = idssd;
            $("#update").modal("show");
    }
    </script>
</body>
</html>