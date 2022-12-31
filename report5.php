<?php
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

// Connect to the MySQL database and retrieve the data
$conn = mysqli_connect("localhost", "root", "", "car_rent_sys");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT paydate,payment FROM rent
    WHERE paydate BETWEEN '$start_date' AND '$end_date'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo '<h2>payments history</h2>';
    echo '<table border="1" cellspacing="0" cellpadding="5">';
    echo '<tr><th>payment date</th><th>amount of payment</th></tr>';
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr><td>' . $row['paydate'] . '</td><td>' . $row['payment'] . '</td></tr>';
    }
} else {
    echo 'recored not found';
}


echo '</table>';


?>