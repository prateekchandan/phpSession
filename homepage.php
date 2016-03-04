<?php
session_start();
if(!isset($_SESSION['email'])){
  header("Location:login.php");
  die("");
}

$email = $_SESSION['email'];

$conn = mysqli_connect("127.0.0.1","guest","password","phpsession") or die("Database Connection Error");

  $query = "SELECT * from `user` where email = '".$email."'";
  $result = mysqli_query($conn,$query);

  $user = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>  
  <div class="container">
    <h1>Welcome <?php echo $user['name']; ?></h1>
    <img src="user.png">
    <p>You are succesfully logged in</p>
    <p>Email Id : <b><?php echo $user['email']; ?></b></p>
    <br>
    <p>
      <a href="logout.php">Logout</a>
    </p>

  </div>
</body>
</html>