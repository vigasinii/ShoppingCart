

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="styles.css">

</head>
<body style = "background-color: black">
>


   
<div class="form-container">

   <form action="index.php" method="post">
      <h3>login now</h3>
      <input type="email" name="email" required placeholder="enter email" class="box">
    <input type="text" name="name" required placeholder="enter name" class="box">
      <input type="password" name="password" required placeholder="enter password" class="box">
      <input type="submit" name="submit" class="btn" value="login now">
      <p>don't have an account? <a href="register2.php">register now</a></p>
   </form>

</div>

</body>
</html>