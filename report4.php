<?php
$costumer_id = $_POST['costumer_id'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
// Connect to the MySQL database and retrieve the data
$conn = mysqli_connect("localhost", "root", "", "car_rent_sys");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT DISTINCT license,email,fname,lname,city,country,bdate,plate_ID,brand FROM vehicle,reservation,customer 
WHERE vehicle_no = vehicle_ID AND customer_license = license AND license='$costumer_id' OR email='$email' OR fname = '$fname' OR
    lname='$lname'";

$result = mysqli_query($conn, $sql);




if (mysqli_num_rows($result) > 0) {
    echo '<h2>All reservations of a customer</h2>';
    echo '<table border="1" cellspacing="0" cellpadding="5">';
    echo '<tr><th>license number</th><th>email</th><th>first name</th><th>last name</th>
    <th>city</th><th>country</th><th>birth date</th><th>plate number</th><th>model</th></tr>';
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr><td>' . $row['license'] . '</td><td>' . $row['email'] . '</td><td>' . $row['fname'] . '</td>
        <td>' . $row['lname'] . '</td><td>' . $row['city'] . '</td><td>' . $row['country'] . '</td><td>' . $row['bdate'] . '</td>
        <td>' . $row['plate_ID'] . '</td><td>' . $row['brand'] . '</td></tr>';
    }
} else {
    echo 'recored not found';
}



echo '</table>';


?>