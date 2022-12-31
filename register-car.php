<!-- handiling the form data -->
<?php
$conn = mysqli_connect("localhost", "root", "", "car_rent_sys");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Taking values from the form
$plate_id = $_POST['plate_id'];
$daily_price = $_POST['daily_price'];
$color = $_POST['color'];
$year = $_POST['year'];
$status = $_POST['status'];
$line = $_POST['line'];
$motor = $_POST['motor'];
$model = $_POST['model'];

$sql = "SELECT * FROM vehicle WHERE plate_ID = '$plate_id'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Record already exists
    echo "exists";
} else {
    // Record does not exist, so add it to the database
    $sql = "INSERT INTO vehicle (plate_ID,daily_price,year_model,color,`line`,motor,brand,`status`) VALUES('$plate_id','$daily_price',
                    '$year','$color','$line','$motor','$model','$status')";
    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Added")</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);

?>