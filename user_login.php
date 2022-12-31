<?php
session_start();

@include 'config.php';


if(isset($_POST['submit'])){

   
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = $_POST['password'];
   
   $select = " SELECT * FROM customer WHERE email = '$email' && password = '$pass' ";
   

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      //Set session variables
      $_SESSION["full name"] = $row["fname"]." ".$row["lname"];
      $_SESSION["email"] = $row["email"];
      $_SESSION["phone"] = "cat";
      $_SESSION["address"] = $row["city"]." ".$row["country"];
      $_SESSION["bdate"] = $row["bdate"];
      $_SESSION["ssn"] = $row["license"];
      $ssn = $row["license"];

      $select2 = "SELECT * FROM cust_phone_no WHERE cust_license = '$ssn' ";
      $result2 = mysqli_query($conn, $select2);
      $row2 = mysqli_fetch_array($result2);
      $_SESSION["pn"] = $row2["phone_no"];

      header("Location: personal-info.php");
     
   }else{
      $error[] = 'Incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="form-container">

   <form action="" method="post">
      <h3>User Login</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>Don't have an account?     <a href="register_form.php">Register Now</a></p>
      <p>Admin?                     <a href="admin_login.php">Login Now</a></p>
   </form>

</div>

</body>
</html>