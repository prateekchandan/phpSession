<?php

session_start();

if(isset($_SESSION['email'])){
  die("Please logout to login again");
}
$error = 0;
if(isset($_POST['email']) && isset($_POST['password'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $conn = mysqli_connect("127.0.0.1","guest","password","phpsession") or die("Database Connection Error");

  $query = "SELECT * from `user` where email = '".$email."' && password = '".$password."'";


  $result = mysqli_query($conn,$query);

  if(mysqli_num_rows($result) == 0){
    $error = 1;
    $error_string = "User Not found";
  }else{
    $user = mysqli_fetch_assoc($result);
    
    $_SESSION['email'] = $user['email'];

    header("Location:homepage.php");
    die("");
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
  if($error==1){
    echo '<div class="message error">
      '.$error_string.'
    </div>';
  }
  
?>

  <!-- Login Form Begins -->
  <div class="inputform">
    <h2 class="inputform-header">Log in</h2>

    <form class="inputform-container" method="post" action="login.php">
      <p><input type="email" name="email" placeholder="Email" required></p>
      <p><input type="password" name="password" placeholder="Password" required></p>
      <p><button>Login</button></p>
      <p><a href="register.php">Register Now</a></p>
    </form>
    <!-- Login Form Ends -->
  </div>
</body>
</html>