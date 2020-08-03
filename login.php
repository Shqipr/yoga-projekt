<?php include'includes/header.php'; ?>

<?php 


session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " SELECT * FORM `user` WHERE name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if($num == 1) {
  header('location:index.php');
}





?>

<section class="default-padding">
<form method="post" action="login.php">
<div class="container text-center">
    <div>
    <h1>Log In</h1>
    <hr>
    </div>
    <label for="user"><b>Username</b></label>
    <input type="text" placeholder="Username" name="user"  >
    <div>
    </div>
   
    <div>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" >
    </div>
    <div>
  
    <hr>
    </div>
    
    <button type="submit" class="btn btn-success">Login</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="register.php">Register</a>.</p>
    
  </div>
  </form>
  </section> 