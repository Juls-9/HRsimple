<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeaveForm</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/leave.min.css" />
    <link rel="stylesheet" href="CSS/leave.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Noto+Sans+HK&family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<?php include("sidebar.php"); ?>
<div class="content container-fluid">
     <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">LEAVE FORM</h3>
                <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Leave Management</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card leave-box" id="leave_annual" >
                <div class="card-body">
                    <form action="frontController.php" method="post" >
                        <div class="card-title width-switch mb-3">Annual
                        </div>
                        <div class="leave-item">
                            <div class="leave-row">
                                <div class="leave-left"><div class="input-box row">
                                    <div class="input-block mb-3">
                                        <div class="row">
                                            <div class="leave-right">
                                                <label for="">Fill Up</label>
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                                        <label for="startDate" class="form-label">Start Date:</label>
                                                        <input type="date" class="form-control" id="startDate" name="startDate" min="2015-01-12" max="2099-01-01"  >
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="endDate" class="form-label">End Date:</label>
                                                        <input type="date" class="form-control" id="endDate" name="endDate" min="2015-01-12" max="2099-01-01"  >
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="phoneNumber" class="form-label">Phone Number:</label>
                                                         <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" >
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="firstName" class="form-label">First Name</label>
                                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" >
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="lastName" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" >
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="middleName" class="form-label">Middle Name</label>
                                                        <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle Name">
                                                </div>
                                                <div class="col-sm-12">
                                                        <label for="middleName" class="form-label">Reason</label>
                                                        <input type="text" class="form-control custom-textarea" id="reason" name="reason" placeholder="ADD YOUR REASONS HERE..." >
                                                </div>
                                                
                                                <div class="col-sm-6 mb-0">
                                                <label for="paidleave" class="form-label">Paid Leave?</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="carry_no" value="option1" >
                                                    <label class="form-check-label" for="carry_no">No</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="carry_yes" value="option2" >
                                                    <label class="form-check-label" for="carry_yes">Yes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 mt-3">
                                                <button type="submit" name="lff" class="btn">Submit</button>
                                                </div>
                                                <span class="error" ><i class="fa-solid fa-circle-exclamation" style="color: #ff0000;"></i><?php if(isset($_SESSION["msg"])){echo $_SESSION["msg"];}elseif(isset($_SESSION["err"])){echo $_SESSION["err"];} ?></span> 
                                         </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
        <canvas id="myChart"></canvas>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    

    <script>
    function initializeChart() {
        const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
        const data = {
            labels: labels,
            datasets: [{
                axis: 'y',
                label: 'Leave Records',
                data: [65, 59, 80, 81, 56, 55, 40],
                fill: false,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };

        const config = {
            maintainAspectRatio:false,
            
            type: 'bar',
            data: data,
            options: {
                indexAxis: 'y',
            }
        };

        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, config);
        
    }

    // Call the initialization function
    // In your main HTML file
$(document).ready(function () {
    $(".wee").click(function () {
        var contentToLoad = $(this).data("content");
        $("#page-content-wrapper .content").load(contentToLoad, function() {
            // Callback function to execute after loading content
            initializeChart();
        });

        // Save the contentToLoad value to localStorage
        localStorage.setItem("lastContent", contentToLoad);
    });
    
    // Load the last content on page load
    var lastContent = localStorage.getItem("lastContent");
    if (lastContent) {
        $("#page-content-wrapper .content").load(lastContent, initializeChart);
    }
});

    initializeChart();
</script>

    <script>
    var editButtons = document.querySelectorAll(".leave-edit-btn");

    for (var i = 0; i < editButtons.length; i++) {
        editButtons[i].addEventListener("click", function(event) {
            var parentLeaveRow = this.parentElement.parentElement;
            var inputsToEnable = parentLeaveRow.querySelectorAll('input, radio, select');

            if (this.textContent === "Edit") {
                // Toggle to "Save" mode
                this.textContent = "Save";
                // Enable the input fields for editing
                inputsToEnable.forEach(function(input) {
                    input.removeAttribute("disabled");
                });

                // Uncheck radio buttons
                parentLeaveRow.querySelectorAll('input[type="radio"]').forEach(function(radio) {
                    radio.checked = false;
                });
            } else {
                // Toggle back to "Edit" mode
                this.textContent = "Edit";
                // Here you can save the changes to the server
                // Disable the input fields again after saving if needed
                inputsToEnable.forEach(function(input) {
                    input.setAttribute("disabled", "disabled");
                });
            }
        });
    }
</script>


    <script src="https://kit.fontawesome.com/87b021b4fa.js" crossorigin="anonymous"></script>
</body>
</html>