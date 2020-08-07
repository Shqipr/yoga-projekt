<?php include'includes/header.php'; ?>

<?php 
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'register');
// $host="localhost";
// $user="root";
// $password="";
// $db="register";

mysql_connect($host,$user,$password);
mysql_select_db($db);


if(isset(['username'])){

  $username =$_POST['user'];
  $password =$_POST['password'];

  $sql="SELECT * FROM `user` WHERE user='".$username."' AND password='".$password."' limit 1;"


  $result= mysaql_query($con,$sql);

  if(mysql_num_rows($result)==1){
    echo "You have successfully Logged in";
    exit();
  }
  else{
    echo "You have entered incorrect password";
    exit();
  }
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
    <input type="text" placeholder="Username" name="user" required >
    <div>
    </div>
   
    <div>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required >
    </div>
    <div>
  
    <hr>
    </div>
    
    <button type="submit" name="login" class="btn btn-success">Login</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="register.php">Register</a>.</p>
    
  </div>
  </form>
  </section> 