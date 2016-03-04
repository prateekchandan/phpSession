<?php
session_start();

if(isset($_SESSION['email'])){
  die("Please logout to login again");
}
$error = 0;
if(isset($_POST['email']) && isset($_POST['password'])&& isset($_POST['name'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $name = $_POST['name'];

  if(isset($_FILES['pic'])){
    $pic = "./img/".$email.".png";
    move_uploaded_file($_FILES['pic']['tmp_name'],$pic);
  }
  else{
    $error = 1;
    $error_strig = "No File Present";
  }
  
  if($error == 0){

    $conn = mysqli_connect("127.0.0.1","guest","password","phpsession") or die("Database Connection Error");

    $query = "INSERT into `user` values (
      '".$email."',
      '".$name."',
      '".$password."',
      '".$pic."'
    )";


    $result = mysqli_query($conn,$query);
    header("Location:homepage.php");
    die("");
  }
}

?>
<!DOCTYPE html>
<html>
<head>
  <title> Registration </title>
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

  <!-- Registration Form Begins -->
  <div class="inputform">
    <h2 class="inputform-header">Register</h2>
    <form class="inputform-container" method="post" enctype="multipart/form-data">
      <p><input type="text" name="name" placeholder="Name" required></p>
      <p><input type="email" name="email" placeholder="Email" required></p>
      <p><input type="password" name="password" placeholder="Password" required></p>
      
      <p><input type="file" name="pic" placeholder="Photo" accept="image/*" required></p>
      <p><button>Submit</button></p>


      <p><a href="login.html">Login</a></p>
    </form>
    <!-- Registration Form Ends -->

  </div>
</body>
</html>


