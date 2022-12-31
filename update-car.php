<!-- handiling the form data -->
<?php
$conn = mysqli_connect("localhost", "root", "", "car_rent_sys");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Taking value from the form
$plate_id = $_POST['plate_id'];

// send data to another php file
setcookie('plate_id', $plate_id);

$sql = "SELECT * FROM vehicle WHERE plate_ID = '$plate_id'";

$result = mysqli_query($conn, $sql);

mysqli_close($conn);


if (mysqli_num_rows($result) > 0) {
    // Record already exists
  header("Location: update-car2.php");
  exit;

} else {
    echo "the car is not on the system. please register it first";
}



?>