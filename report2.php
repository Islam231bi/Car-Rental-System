<?php
$vehicle_id = $_POST['vehicle_id'];
$plate_id = $_POST['plate_id'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

// Connect to the MySQL database and retrieve the data
$conn = mysqli_connect("localhost", "root", "", "car_rent_sys");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT DISTINCT reservedate,vehicle_ID,plate_ID,daily_price,year_model,color,`status`,`line`,motor,brand FROM vehicle,reservation 
WHERE vehicle_no = vehicle_ID AND reservedate BETWEEN '$start_date' AND '$end_date' AND vehicle_ID='$vehicle_id' OR plate_ID='$plate_id'";

$result = mysqli_query($conn, $sql);




if (mysqli_num_rows($result) > 0) {
    echo '<h2>All reservations of a car</h2>';
    echo '<table border="1" cellspacing="0" cellpadding="5">';
    echo '<tr><th>reservation date</th><th>vehicle ID</th><th>plate ID</th><th>daily price</th><th>year</th><th>color</th>
    <th>status</th><th>line</th><th>motor</th><th>model</th></tr>';
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr><td>' . $row['reservedate'] . '</td><td>' . $row['vehicle_ID'] . '</td><td>' . $row['plate_ID'] . '</td><td>' . $row['daily_price'] . '</td>
        <td>' . $row['year_model'] . '</td><td>' . $row['color'] . '</td><td>' . $row['status'] . '</td><td>' . $row['line'] . '</td>
        <td>' . $row['motor'] . '</td><td>' . $row['brand'] . '</td></tr>';
    }
} else {
    echo 'recored not found';
}



echo '</table>';


?>