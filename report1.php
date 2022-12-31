<?php 
 @include 'config.php';

 session_start();
$startdate = mysqli_real_escape_string($conn, $_POST['start-date']);
$enddate = mysqli_real_escape_string($conn, $_POST['end-date']);
$query =  "SELECT reservedate, pickupdate, returndate, 
 plate_ID, daily_price, year_model, color, line, motor, brand, status,
 fname, lname, email, password, license, city, country, bdate
FROM reservation join customer join vehicle on (customer.license = reservation.customer_license
and reservation.vehicle_no = vehicle.vehicle_ID)
where reservedate between '$startdate' and '$enddate' ";
$result=mysqli_query($conn,$query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Car & Customer INFO </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="5"><h2>Report</h2></th> 
		</tr> 
			  <th> Reserve date </th> 
			  <th> Pickup date </th>
			  <th> return date </th>
			  
			  <th> Plate ID </th> 
			  <th> Car daily price </th> 
			  <th> Car model </th>
			  <th> Car color </th> 
			  <th> Car line </th>
			  <th> Motor </th> 
			  <th> Brand </th>
			  <th> Car status </th> 
			  <th> Customer fisrt name </th> 
			  <th> Customer last name </th>
			  <th> Customer Email </th> 
			  <th> Customer Pass </th>
			  <th> License </th> 
			  <th> Country </th>
			  <th> City </th>
			  <th> Birth date </th>
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> 
		<td><?php echo $rows['reservedate']; ?></td>
		<td><?php echo $rows['pickupdate']; ?></td> 
		<td><?php echo $rows['returndate']; ?></td> 
		<td><?php echo $rows['plate_ID']; ?></td>
		<td><?php echo $rows['daily_price']; ?></td>
		<td><?php echo $rows['year_model']; ?></td> 
		<td><?php echo $rows['color']; ?></td> 
		<td><?php echo $rows['line']; ?></td>
		<td><?php echo $rows['motor']; ?></td> 
		<td><?php echo $rows['brand']; ?></td> 
		<td><?php echo $rows['status']; ?></td>
		<td><?php echo $rows['fname']; ?></td> 
		<td><?php echo $rows['lname']; ?></td>
		<td><?php echo $rows['email']; ?></td> 
		<td><?php echo $rows['password']; ?></td>
		<td><?php echo $rows['license']; ?></td> 
		<td><?php echo $rows['country']; ?></td> 
		<td><?php echo $rows['city']; ?></td>
		<td><?php echo $rows['bdate']; ?></td> 
		
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>