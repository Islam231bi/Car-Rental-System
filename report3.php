<?php
$status_date = $_POST['status-date'];
// Connect to the MySQL database and retrieve the data
$conn = mysqli_connect("localhost", "root", "", "car_rent_sys");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT plate_ID,`status` FROM vehicle,reservation 
WHERE vehicle_no = vehicle_ID AND reservedate = '$status_date'";

$result = mysqli_query($conn, $sql);




if (mysqli_num_rows($result) > 0) {
    echo '<h2>Status of all cars</h2>';
    echo '<table border="1" cellspacing="0" cellpadding="5">';
    echo '<tr><th>plate number</th><th>status</th></tr>';
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr><td>' . $row['plate_ID'] . '</td><td>' . $row['status'] . '</td></tr>';
    }
} else {
    echo 'recored not found';
}



echo '</table>';


?>