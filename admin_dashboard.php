<!-- handiling the form data -->
<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> Admin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin_dashboard.php">
                    <span>Advanced Search</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Operations
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <!-- <i class="fas fa-fw fa-cog"></i> -->
                    <span>Car</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="register-car.html">Register New Car</a>
                        <a class="collapse-item" href="update-car.html">Update Car State</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="reports.html">
                    <!-- <i class="fas fa-fw fa-wrench"></i> -->
                    <span>Reports</span>
                </a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['full name']; ?></span>
                                <img class="img-profile rounded-circle" src="imgs/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- main content -->
                <div class="row">
                <form action="" method="post">
                    <div style="padding-left: 40px;">
                        <input type="radio" name="type" id="car" value="car" checked>
                        <label style="color: black;" for="car">Search by vehicle information:</label>
                        <br>
                        <input type="text" name="plate_id" id="plate_id" placeholder="Enter the plate id">
                        <input type="text" name="daily_price" id="daily_price" placeholder="Enter the daily price">
                        <input type="text" name="color" id="color" placeholder="Enter the color">
                        <input type="text" name="year" id="year" placeholder="Enter the production year">
                        <input type="text" name="status" id="status" placeholder="Enter the status">
                        <input type="text" name="line" id="line" placeholder="Enter the line">
                        <input type="text" name="motor" id="motor" placeholder="Enter the motor type">
                        <input type="text" name="model" id="model" placeholder="Enter the model">
                        <hr>
                    </div>
                    <div style="padding-left: 40px;">
                        <input type="radio" name="type" id="customer" value="customer">
                        <label style="color: black;" for="customer">Search by costumer Information:</label>
                        <br>
                        <input type="number" name="costumer_id" id="costumer_id" placeholder="Enter the customer id">
                        <input type="text" name="email" id="email" placeholder="Enter email">
                        <input type="text" name="fname" id="fname" placeholder="Enter the first name">
                        <input type="text" name="lname" id="lname" placeholder="Enter the last name">
                        <input type="text" name="city" id="city" placeholder="Enter the city">
                        <input type="text" name="country" id="country" placeholder="Enter the country">
                        <input type="date" name="bdate" id="bdate">
                        <hr>
                    </div>
                    <div style="padding-left: 40px;">
                        <input type="radio" name="type" id="reserv" value="reserv">
                        <label style="color: black" for="reserv">Search by reservation date:</label>
                        <br>
                        <input type="date" name="reservation_date" id="reservation_date">
                    </div>


                    <div style="text-align: center;">
                    <button class="btn btn-primary" name="empty" type="submit">
                                    Empty
                         </button>
                        <button class="btn btn-primary" name="search" type="submit">
                                    Submit
                         </button>
                    </div>

                </form>
                </div>

                <div class="row">
               <div class="col-xl-11 col-lg-2">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Search Results</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tbody>
                                    <?php
                                        @include 'config.php';
                                        if(isset($_POST['search'])){
                                    
                                        $type = $_POST['type'];
                                        $plate_id = $_POST['plate_id'];
                                        $daily_price = $_POST['daily_price'];
                                        $color = $_POST['color'];
                                        $year = $_POST['year'];
                                        $status = $_POST['status'];
                                        $line = $_POST['line'];
                                        $motor = $_POST['motor'];
                                        $model = $_POST['model'];
                                        $reservation_date = $_POST['reservation_date'];
                                        $costumer_id = $_POST['costumer_id'];
                                        $email = $_POST['email'];
                                        $fname = $_POST['fname'];
                                        $lname = $_POST['lname'];
                                        $city = $_POST['city'];
                                        $country = $_POST['country'];
                                        $bdate = $_POST['bdate'];
                                        $sql = null;

                                        if ($type == 'car') {
                                            $sql = "SELECT * FROM vehicle WHERE  plate_ID='$plate_id' OR daily_price = '$daily_price' OR
                                            year_model='$year' OR color = '$color' OR status = '$status' OR
                                            line='$line' OR motor='$motor' OR brand='$model'";
                                        }
                                        elseif ($type == 'customer') {
                                            $sql = "SELECT * FROM customer 
                                            WHERE license='$costumer_id' OR email='$email' OR fname = '$fname' OR
                                            lname='$lname' OR city='$city' OR country='$country' OR
                                            bdate = '$bdate'";
                                        
                                        } else {
                                            $sql = "SELECT * FROM reservation
                                            WHERE  reservedate='$reservation_date'";
                                        }

                                        $result = mysqli_query($conn, $sql);

                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_array($result)){
                                                if ($type == 'car') {
                                                    echo "<tr>";
                                                    echo "<td> plate ID: ".$row["plate_ID"]."</td>";
                                                    echo "<td> Price/hr: ".$row["daily_price"]."</td>";
                                                    echo "<td> Year of Production: ".$row["year_model"]."</td>";
                                                    echo "<td> Color: ".$row["color"]."</td>";
                                                    echo "<td> Status ".$row["status"]."</td>";
                                                    echo "<td> Line: ".$row["line"]."</td>";
                                                    echo "<td> Motor: ".$row["motor"]."</td>";
                                                    echo "<td> Brand: ".$row["brand"]."</td>";
                                                    echo "</tr>";
                                                } elseif ($type == 'customer') {
                                                    
                                                    echo "<tr>";
                                                    echo "<td> license number: ".$row["license"]."</td>";
                                                    echo "<td> Email: ".$row["email"]."</td>";
                                                    echo "<td> First name: ".$row["fname"]."</td>";
                                                    echo "<td> Last name: ".$row["lname"]."</td>";
                                                    echo "<td> City ".$row["city"]."</td>";
                                                    echo "<td> Country: ".$row["country"]."</td>";
                                                    echo "<td> Birth date: ".$row["bdate"]."</td>";
                                                
                                                    echo "</tr>";
                                        
                                                } else {
                                     
                                                    echo "<tr>";
                                                    echo "<td> Reservation ID : ".$row["reservation_ID"]."</td>";
                                                    echo "<td> pickup date: ".$row["pickupdate"]."</td>";
                                                    echo "<td> pickup location: ".$row["pickuplocation"]."</td>";
                                                    echo "<td> Return date: ".$row["returndate"]."</td>";
                                                    echo "<td> Reservation date".$row["reservedate"]."</td>";
                                                    echo "<td> Customer License: ".$row["customer_license"]."</td>";
                                                    echo "<td> Vehicle id: ".$row["vehicle_no"]."</td>";
                                                
                                                    echo "</tr>";
                                                }
                                            }
                                        }
                                        else { 
                                                echo '<script>alert("No Records Found")</script>';
                                        }
                                    
                                    };
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
               </div>
              </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>AAIH &copy; For Car Rental Services</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->



    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>