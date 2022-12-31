<!-- handiling the form data -->
<?php
$conn = mysqli_connect("localhost", "root", "", "car_rent_sys");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Taking values from the form
$plate_id = $_COOKIE['plate_id'];
$daily_price = $_POST['daily_price'];
$color = $_POST['color'];
$year = $_POST['year'];
$status = $_POST['status'];
$line = $_POST['line'];
$motor = $_POST['motor'];
$model = $_POST['model'];

$sql = "UPDATE vehicle SET daily_price = '$daily_price' ,year_model = '$year' ,color = '$color',
`line` = '$line',motor = '$motor',brand = '$model',`status` = '$status'
WHERE plate_ID = '$plate_id'";

if (mysqli_query($conn, $sql)) {
    echo "updated";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>