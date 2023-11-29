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
    <link rel="stylesheet" href="CSS/addDepartment.css">
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
        <h1>DEPARTMENT LIST</h1>
        
            <div class="btn">
                <a href="#popup" id="btn1">Add Department</a><a href="addEmployee.php" id="btn1">EMPLOYEES</a>
                <form action="">
                <input type="search" placeholder="Search name">
                <input type="submit" value="Search" class="srch-btn">
            </form>
            </div>
            
        <!--TABLES-->
        <div class="box">    
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Hired Date</th>
                        <th>Department</th>
                        <th>Salary</th>
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
                        <td><?php echo $dt["department"];?></td>
                        <td><?php echo $dt["salary"];?></td>
                        <td>
                        <button type="button" data-id="<?php echo $dt["id"]?>" data-name="<?php echo $dt["firstname"]?>" data-val="<?php echo $dt["salary"]?>" data-hd="<?php echo $dt["hire_date"]?>" class="act1 act" onclick="confirmUpdate(this);"><i class="fa-solid fa-pen-to-square fa-sm" style="color: #ffffff;"></i></button> &nbsp; 
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
                    <h2>ADD DEPARTMENT</h2>
                    <p class="err"><?php if(isset($_SESSION["err"])){echo $_SESSION["err"]; unset($_SESSION['err']);}?></p>
                    <p class="sccs scs"><?php if(isset($_SESSION["sccs"])){echo $_SESSION["sccs"]; unset($_SESSION['sccs']);}?></p>
                    <a href="#" id="cls-btn" name="bck">back</a>
                <form action="../index.php" method="post">
                    <input type="text" name="firstname" placeholder="firstname">
                    <input type="text" name="lastname" placeholder="lastname">
                    <input type="text" name="middlename" placeholder="middlename">
                    <input type="text" name="email" placeholder="email">
                    <input type="text" name="bday" placeholder="birthday">
                    <input type="text" name="hdate" placeholder="hire date">
                    <input type="text" name="salary" placeholder="salary">
                    <input type="text" name="dp" placeholder="department">
                    <input type="submit" name="addemp" value="Add" id="add-btn">
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
    <div class="up-main-container" id="update">
        <div class="up-container">
            <div class="up">
                
                <h3>Update Employee</h3>
                <form action="../index.php" method="post" id="form-update-user">
                    <input type="hidden" name="ids">
                    <label for="">Role</label>
                    <input type="text" >
                    <label for="">Department</label>
                    <input type="text" name="name">
                    <label for="">Salary</label>
                    <input type="text" name="idssd">
                    <label for="">asdasd</label>
                    <input type="text">
                    <button data-dismiss="modal">Cancel</button>
                    <input type="submit" name="upd" value="Update" class="up-btn">
                    
                </form>
            </div>
        </div>
    </div>
    
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