<?php

include 'config.php';

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login2.php');
};

if (isset($_GET['logout'])) {
    // Perform any logout-related operations here (e.g., session cleanup, etc.)

    // Redirect to login.php after logout
    header('Location: login2.php');
    exit; // Make sure to exit after the header redirect to prevent further execution of the script.
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
<style>
  h1 {
    
 text-decoration: underline;
   font-family: 'Playfair Display', serif;
      font-weight: 700; /* You can also control the font weight */
  }
  p {
    font-family: 'Roboto', sans-serif;
    font-weight: 700; /* You can also control the font weight */
  }
</style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="">
<?php
$glink=mysqli_connect("localhost","root","","shop_db");
if($glink==false)
{
    echo("Error:Could not connect".mysqli_connect_error());
}
else
{
    echo("");
}
$name=$_POST["name"];
$email=$_POST["email"];

$create=" create table if not exists login(name varchar(30), email varchar(40),password varchar(20))";
if(mysqli_query($glink,$create))
{
    echo "";
}
else
{
    echo " Unable to create table".mysqli_error($glink);
}
$insert="INSERT into login values('$name','$email','$password')";
if(mysqli_query($glink,$insert))
{
    echo "";
}
else{
    echo "unable to insert into table".mysqli_error($glink);
}
?>
 
	


 
 <div class="container">

<div class="user-profile">
   <div class="flex">
   <?php
echo "Hi! $name Welcome back! \n email: $email ";
?>
  
  
     <a href="login2.php?logout=true" onclick="return confirm('Are you sure you want to logout?');" class="delete-btn">Logout</a>
</div>
</div>
    
    <div class="container">
        <header>
<center>
            <h1 style="font-size:50px ">Pepperfry Furniture</h1></center>
            <div class="shopping">
                <img src="image/shopping.svg">
                <span class="quantity">0</span>
            </div>
        </header>

        <div class="list">
          
        </div>
    </div>
    <div class="card">
        <h1>Cart</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Close</div>
<div class="closeShopping"><a href="payment.html">PAY NOW</a></div>
        </div>
    </div>

    <script src="app.js"></script>
</body>
</html>