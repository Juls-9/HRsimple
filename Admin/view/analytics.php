<?php require_once "auth.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://kit.fontawesome.com/87b021b4fa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/analytics.css">
    <title>Document</title>
</head>
<body>
  <?php include("sidebar.php"); ?>
<div id="main">
  <div class="containers">
    <!--CONTENT AREA "CARDS"-->
    <a href="#" style="text-decoration:none;"><div class="items item1s"><i class="fa-solid fa-user fa-2xl" style="color: #081935;"></i> &nbsp;Users &nbsp; 69</div>     </a>
    <a href="#" style="text-decoration:none;"><div class="items item2s"><i class="fa-solid fa-address-card fa-2xl" style="color: #081935;"></i> &nbsp;Employees</div>   </a>
    <a href="#" style="text-decoration:none;"><div class="items item3s"><i class="fa-solid fa-envelope fa-2xl" style="color: #081935;"></i> &nbsp;New Applicant</div>   </a>
    <a href="#" style="text-decoration:none;"><div class="items item4s"><i class="fa-solid fa-bars-progress fa-2xl" style="color: #081935;"></i> &nbsp;Request</div>     </a>
  </div>
<div class="main-container">
    <div class="box box-1">
      <!--FIRST CHART-->
      <div class="chart chart1">
        <canvas id="myChart"></canvas><hr><p><b>Employee datas</b></p>
      </div>
    </div>
    <!--SECOND CHART-->
    <div class="box box-2">
      <div class="chart chart2">
        <canvas id="myChart2"></canvas><hr><p><b>Employee Datas</b></p>
      </div>
    </div>
    <div class="box box-3">
      <h1>STATUS</h1>
      <div class="stat">
      <h3 style="font-size: 30px;color:gold"><i class="fa-sharp fa-solid fa-peseta-sign fa-xl"></i> 69<br><a href="">Total Salary Cost</a></h3>
      
      <h3 style="font-size: 30px;color:gold"><i class="fa-solid fa-person fa-xl"></i> 69<br><a href="">Total Employees</a></h3>
      
      <h3 style="font-size: 30px;color:gold">6999 <br><a href="">asdasdasd</a></h3>
      
      <a href=""></a>
    </div>
      <hr>
      
    </div>
    <!--THIRD CHART-->
    <div class="box box-4">
      <div class="chart chart3">
        <canvas id="myChart3"></canvas><hr><p><b>Employee datas</b></p>
      </div>
    </div>
    <!--FOURTH CHART-->
    <div class="box box-5">
      <div class="chart chart4">
        <canvas id="myChart4"></canvas><hr><p><b>Employee datas</b></p>
      </div>
    </div>
    
    <div class="box box-6"><table id="tbl">
      <table>
      <tr>
        <th>Name</th>
        <th>Emp. ID</th>
        <th>Contact</th>
        <th>Rate</th>
        <th>Rate</th>
      </tr>
      <tr>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
      </tr>
      <tr>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
      </tr>
      <tr>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
      </tr>
      <tr>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
      </tr>
      <tr>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
      </tr>
      <tr>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
      </tr>
      <tr>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
      </tr>
    </table></div>
  </div>
<script>
  //SECOND CHART
  const ctx = document.getElementById('myChart');
 
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Position 1', 'Position 2', 'Position 3', 'Position 4', 'Position 5'],
      datasets: [{
        label: 'Employeesssssssssssssssss',
        data: [12, 19, 3, 5, 2, ],
        backgroundColor: '#66B2FF',
        borderWidth: 5
      }]
    },
    options: {
      maintainAspectRatio:false,
      plugins: {
            title: {
                display: true,
                text: 'EMPLOYEE DATA'
            }
        },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  //SECOND CHART
  const cts = document.getElementById('myChart2');
 
  new Chart(cts, {
    type: 'pie',
    data: {
      labels: ['FEMALE', 'MALE'],
      datasets: [{
        label: 'Employeesssssssssssssssss',
        data: [69,40],
        backgroundColor: ['rgb(255, 0, 255, 0.5)','rgb(0, 0, 204, 0.5 )'],
        borderWidth: 5
      }]
    },
    options: {
      maintainAspectRatio:false,
      plugins: {
            title: {
                display: true,
                text: 'EMPLOYEE DATA'
            },
            
        },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  //THIRD CHART
  const ctz = document.getElementById('myChart3');
 
  new Chart(ctz, {
    type: 'doughnut',
    data: {
      labels: ['EMPLOYEE 1', 'EMPLOYEE 2','EMPLOYEE 3','EMPLOYEE 4'],
      datasets: [{
        label: 'Employeesssssssssssssssss',
        data: [69,40,100,69],
        backgroundColor: ['rgb(255, 128, 0, 1)','rgb(51, 153, 255, 1 )','rgb(153, 0, 76, 1 )','rgb(0, 0, 204, 1 )'],
        borderWidth: 5
      }]
    },
    options: {
      maintainAspectRatio:false,
      plugins: {
            title: {
                display: true,
                text: 'EMPLOYEE DATA'
            },
            
        },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  //FOURTH CHART
  const cty = document.getElementById('myChart4');
 
  new Chart(cty, {
    type: 'line',
    data: {
      labels: ['EMPLOYEE 1', 'EMPLOYEE 2','EMPLOYEE 3','EMPLOYEE 4','EMPLOYEE 4','EMPLOYEE 4'],
      datasets: [{
        label: '',
        data: [69,40,100,69,100,101],
        backgroundColor: ['rgb(255, 128, 0, 1)','rgb(51, 153, 255, 1 )','rgb(153, 0, 76, 1 )','rgb(0, 0, 204, 1 )'],
        borderWidth: 5
      }]
    },
    options: {
      maintainAspectRatio:false,
      plugins: {
            title: {
                display: true,
                text: 'EMPLOYEE DATA'
            },
            
        },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
</body>
</html>