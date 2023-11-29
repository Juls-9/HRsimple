<!DOCTYPE html>
<html lang="en">
    <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/adminleave.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-x2ZmHbRR9Agp3Pi6bA8chsljGRq6bSSt9oUf5r5FowYXW5UJhY6OtnU5fUeVp4jqo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/87b021b4fa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap">
    <link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB5-Pro-Advanced_6.4.2/css/mdb.min.css">
    <link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB5-Pro-Advanced_6.4.2/plugins/css/all.min.css">
     <title>Admin Leave</title>
    </head>
    <body>
    <?php include("sidebar.php"); ?>
        <div class="container-fluid">
            <div class="row mb-0">
                 <div class="col-sm-12">
                    <h3 class="page-title">Admin Leave Status</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="l.html">Leave Management</a></li>
                        <li class="breadcrumb-item active">Admin Leave Status</li>
                    </ul>
                </div>
            </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card text-dark bg-light">
                            <div class="card-body">
                                <h5 class="card-title">TODAY PRESENT</h5>
                                <p class="card-text">20/60</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">TOTAL OF LEAVE</h5>
                                <p class="card-text">20/60</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">LEAVE PENDING</h5>
                                <p class="card-text">20/60</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">APPROVED & NOT APPROVED</h5>
                                <p class="card-text">20/60</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                <div class="col-sm-2">
                    <label for="fromDate" class="form-label">Search name:</label>
                    <input type="text" class="form-control floating" placeholder="Search">
                </div>
                <div class="col-sm-2">
                    <label for="fromDate" class="form-label">Status:</label>
                    <select class="form-select">
                        <option value="">All</option>
                        <option value="Pending">Pending</option>
                        <option value="Approved">Approved</option>
                        <option value="Not Approved">Not Approved</option>
                    </select>
                </div>
                <div class="col-sm-2 offset-sm-4">
                    <label for="fromDate" class="form-label">From Date:</label>
                    <input type="date" class="form-control" id="fromDate">
                </div>
                <div class="col-sm-2">
                    <label for="toDate" class="form-label">To Date:</label>
                    <input type="date" class="form-control" id="toDate">
                </div>
            </div>

            <div class="row justify-content-center">
            <div class="col-12">
                <div id="datatable" class="datatable">
                    <div class="datatable-inner table-responsive ps ps--active-x ps--active-y" style="overflow: auto; position: relative;">
                    <table class="table datatable-table">
                       <thead class="datatable-header">
                          <tr>
                              <th class="fixed-cell" scope="col">ID</th>
                              <th scope="col">Name</th>
                              <th scope="col">Leave Type</th>
                              <th scope="col">From</th>
                              <th scope="col">To</th>
                              <th scope="col">Contact</th>
                              <th scope="col">Reason</th>
                              <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody class="datatable-body">
                        <tr scope="row" data-mdb-index="0">
                                <td class="fixed-cell" data-mdb-field="id">1</td>
                                <td data-mdb-field="name">BONDOK</td>
                                <td data-mdb-field="leave_type">HOSPITAL</td>
                                <td data-mdb-field="start_date">12/34/56</td>
                                <td data-mdb-field="end_date">12/34/56</td>
                                <td data-mdb-field="contact">091234567891</td>
                                <td data-mdb-field="reason">Goin to Heaven</td>
                                <td data-mdb-field="status">
                                  <select data-status="approved">
                                      <option value="approved">Approved</option>
                                      <option value="pending">Pending</option>
                                      <option value="not_approved">Not Approved</option>
                                  </select>
                              </td>
                            </tr>
                       
                        </tbody>
                    </table>

                        <div class="ps__rail-x">
                            <div class="ps__thumb-x" tabindex="0"></div>
                        </div>
                        <div class="ps__rail-y">
                            <div class="ps__thumb-y" tabindex="0"></div>
                        </div>
                    </div>
                    <div class="datatable-pagination">
                        <!-- Pagination controls -->
                    </div>
                </div>
            </div>
        </div>    

        </div>
        
    
        <script>
       document.addEventListener('DOMContentLoaded', function () {
    const dataRows = [
        // Your data rows as objects
    ];

    // Initialize the DataTable
    const basicData = {
        columns: [{
            label: 'ID',
            field: 'id',
            sort: true,
            width: 300,
            fixed: true,
        },
        {
            label: 'Name',
            field: 'name',
            sort: true,
            width: 300,
        },
        // ... (other columns)
        {
            label: 'Status',
            field: 'status', // Now, this field represents the selected status
            sort: false,
            width: 300,
        }],
        rows: dataRows,
    };

    const datatable = new mdb.Datatable(document.getElementById('datatable'), basicData);

    // Add a change event listener to update the data when the user changes the status
    datatable.table.addEventListener('change', function (e) {
        const select = e.target;
        if (select.tagName === 'SELECT') {
            // Find the row index
            const rowIndex = select.closest('tr').getAttribute('data-mdb-index');

            // Find the cell index
            const cellIndex = select.closest('td').getAttribute('data-mdb-field');

            // Update the table cell value with the selected status
            datatable.table.rows[rowIndex].cells[cellIndex].textContent = select.value;
        }
    });
});


        // You can add more custom code as needed to work with your modified table.
        
    </script>
    </body>
</html>