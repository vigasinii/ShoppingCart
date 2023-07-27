<?php

include 'config.php';

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
};



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="styles.css">

</head>
<body>
   
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
$password=$_POST["password"];
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
echo "Hi! $name Welcome back! \n email: $email $password";
?>
  
      <a href="index.html" class="option-btn">Access Website</a>
    <a href="login2.php?logout=<?php echo $user_id; ?>" onclick="return confirm('Are you sure you want to logout?');" class="delete-btn">Logout</a>
</div>
</div>