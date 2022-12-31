<!-- handiling the form data -->
<?php
$conn = mysqli_connect("localhost", "root", "", "car_rent_sys");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Taking values from the form
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
    year_model='$year' OR color = '$color' OR `status` = '$status' OR
    `line`='$line' OR motor='$motor' OR brand='$model'";
} elseif ($type == 'customer') {
    $sql = "SELECT * FROM customer 
    WHERE license='$costumer_id' OR email='$email' OR fname = '$fname' OR
    lname='$lname' OR city='$city' OR country='$country' OR
    bdate = '$bdate'";

} else {
    $sql = "SELECT * FROM reservation
    WHERE  reservedate='$reservation_date'";
}



$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        if ($type == 'car') {
            echo "<p> plate id : $row[plate_ID] </p>
            <p> daily price : $row[daily_price] </p>
            <p> year of production : $row[year_model] </p>
            <p> color : $row[color] </p>
            <p> status : $row[status] </p>
            <p> line : $row[line] </p>
            <p> motor : $row[motor] </p>
            <p> brand : $row[brand] </p><hr>";
        } elseif ($type == 'customer') {
            echo "<p> license number : $row[license] </p>
            <p> email : $row[email] </p>
            <p> first name : $row[fname] </p>
            <p> last name : $row[lname] </p>
            <p> city : $row[city] </p>
            <p> country : $row[country] </p>
            <p> birth date : $row[bdate] </p><hr>";

        } else {
            echo "<p> reservation id : $row[reservation_ID] </p>
            <p> pickup date : $row[pickupdate] </p>
            <p> pickup location : $row[pickuplocation] </p>
            <p> return date : $row[returndate] </p>
            <p> reservation date : $row[reservedate] </p>
            <p> customer license : $row[customer_license] </p>
            <p>  vehicle id : $row[vehicle_no] </p><hr>";
        }
    }

} else {
    echo 'recored not found';
}


mysqli_close($conn);

?>