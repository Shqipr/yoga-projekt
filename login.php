<?php include'includes/header.php'; ?>

<?php 
  session_start();
 
  $con = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($con, 'register');
 
  if(isset($_POST['login'])){
   
    $username = $_POST['user'];
    $password = $_POST['password'];
   
    $sql = "SELECT * FROM `user` WHERE ";
    $sql .= "user = '$username'";
    $sql .= "AND password = '$password'";
    $sql .= "LIMIT 1";
   
    $result = mysqli_query($con, $sql);
    
    $row = mysqli_fetch_array($result);
  
  
    if($row['user'] == $username & $row['password'] == $password){
         header('location:home.php?success');
    }else{
        header('location:login.php?error');
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