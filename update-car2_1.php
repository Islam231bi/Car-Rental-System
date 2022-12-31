<?php
// Connect to the MySQL database
$conn = mysqli_connect("localhost", "root", "", "car_rent_sys");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$plate_id = $_COOKIE['plate_id'];

$sql = "SELECT * FROM vehicle WHERE plate_ID = '$plate_id'";

$result = mysqli_query($conn, $sql);


// Fetch the resulting row as an array
$row = mysqli_fetch_array($result);


mysqli_close($conn);


?>
