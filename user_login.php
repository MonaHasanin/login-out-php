<?php
include './hello.php';
?>
<!-- 
HTTP : Hyper Text Transfer Protocol, stateless
Tracking user:
Session: server=>random session ID, destroy ID
cookie: browser -->
<!DOCTYPE html>
<html lang="en"><head>
  <title>Welcome Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <br><br><br> 

  <h1>Log In Form</h1>
  <p style="color: red;">
  <?php echo $msg; ?>
</p>
  <br><br>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    First Name: <input type="text" name="username"> <br> <br>
    Password: <input type="password" name="pwd">
    <div>
      <label> <input type="checkbox" name="remember">Remember me</label>
    </div>
    <button type="submit" name="login">login</button>
</form>
    <br> 
    
    <p>
     Click here to logout
    <a href="./logout.php">LogOut</a>   </p>
    <br> <br>

    
<br><br><br> 
</body>
</html>