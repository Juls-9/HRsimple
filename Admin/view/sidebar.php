<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-thin-straight/css/uicons-thin-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-thin-straight/css/uicons-thin-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <script src="https://kit.fontawesome.com/87b021b4fa.js" crossorigin="anonymous"></script>
  <title>Sidebar</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://kit.fontawesome.com/87b021b4fa.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="CSS/sidebar.css">
</head>
<body>
  <div id="mySidebar" class="sidebar">
    <!--SIDEBAR LOGO-->
    <div class="menu"><h1>HRS</h1></div>
    <!--SIDEBAR CONTENT-->
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a><br><br>
    <hr>
    <h2>MENU</h2>
      <a href="analytics.php"><i class="fa-solid fa-house-chimney fa-sm"></i> &nbsp;Dashboard</a>
      <a href="appform.php"><i class="fa-regular fa-circle-question fa-sm"></i> &nbsp;Application Form</a>
    
    <!--DROPDOWN EMPLOYEE-->
    <div class="dropdown">
      <a href="#" onclick="myFunction()" class="dropbtn"><i class="fa-solid fa-users fa-sm"></i> &nbsp;Employees</a>
      <div id="myDropdown" class="dropdown-content">
      <a href="admin.php">Admin Dashboard &nbsp;<i class="fa-solid fa-users fa-sm"></i></a>
        <a href="addEmployee.php">Employee Dashboard &nbsp;<i class="fa-solid fa-users fa-sm"></i></a>
      </div>
    </div>
    <!--DROPDOWN LEAVE-->
    <div class="dropdown">
      <a href="#" onclick="myFunction2()" class="dropbtn"><i class="fi fi-rr-house-leave"></i> &nbsp;Leave Management</a>
      <div id="myDropdown2" class="dropdown-content">
        <a href="leave.php">Leave Form &nbsp;<i class="fa-solid fa-user fa-sm"></i></a>
        <a href="adminleave.php">Admin Leave &nbsp;<i class="fa-solid fa-users fa-sm"></i></a>
        <a href="leavetrack.php">leave Status &nbsp;<i class="fa-solid fa-users fa-sm"></i></a>
      </div>
    </div>
    <div class="dropdown">
      <a href="#" onclick="myFunction3()" class="dropbtn"><i class="fa-solid fa-graduation-cap"></i> &nbsp;Learning Management</a>
      <div id="myDropdown3" class="dropdown-content">
      <a href="traineelist.php">trainee &nbsp;<i class="fi fi-ss-book-open-reader"></i></a>
        <a href="trainees.php">Trainers &nbsp;<i class="fa-solid fa-users fa-sm"></i></a>
      </div>
    </div>
    <div class="dropdown">
      <a href="#" onclick="myFunction4()" class="dropbtn"><i class="fi fi-sr-calendar-clock"></i> &nbsp;Time Management</a>
      <div id="myDropdown4" class="dropdown-content">
                <a href="timesheet.php"> Time Sheet &nbsp;<i class="fi fi-ts-calendar-clock"></i></a>
                <a href="shiftsch.php">Shift and Schedules &nbsp;<i class="fi fi-ts-book-open-cover"></i></a>
            </div>
    </div>
    <div class="dropdown">
      <a href="#" onclick="myFunction5()" class="dropbtn"><i class="fi fi-ts-id-card-clip-alt"></i> &nbsp;Payroll</a>
      <div id="myDropdown5" class="dropdown-content">
                <a href="payroltable.php">Payroll Table &nbsp;<i class="fi fi-bs-money-bill-wave"></i></a>
                <a href="payslip.php">Payslip &nbsp;<i class="fi fi-ts-id-card-clip-alt"></i></a>
            </div>
    </div>
      <!--DROPDOWN TIME AND ATTENDANCE-->

          <h2>OTHERS</h2>
      <a href="profile.php"><i class="fi fi-ss-user-gear"></i> &nbsp;Account Settings</a>
</div>

<div id="main">
  <!--NAV BAR-->
  <ul class="flex">
    <button class="openbtn" onclick="openNav()">☰</button>
      <li style="font-size: 25px;"><i class="fa-solid fa-circle-h fa-2xl" style="color: #081935;"></i> Human Resource</li>
      <?php if(!isset($_SESSION["user_ids"])){ ?>
      <li style="margin-left:auto;"><i class="fa-solid fa-circle-user fa-2xl" style="color: #081935;"></i> Profile</li>
      <?php }else{?>
        <li style="margin-left:auto;"><i class="fa-solid fa-circle-user fa-2xl" style="color: #081935;"></i> <a href="logout.php">Log out <?php echo $_SESSION["user_ids"] ?></a></li>
        <?php } ?>
  </ul>
  <hr>
  
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
  
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
// Second Dropdown
function myFunction2() {
  document.getElementById("myDropdown2").classList.toggle("show");
}
// Third Dropdown
function myFunction3() {
  document.getElementById("myDropdown3").classList.toggle("show");
}
// Third Dropdown
function myFunction4() {
  document.getElementById("myDropdown4").classList.toggle("show");
}
// Third Dropdown
function myFunction5() {
  document.getElementById("myDropdown5").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
} 
</script>


</body>
</html>
