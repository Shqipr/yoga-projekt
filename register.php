
<?php include'includes/header.php'; ?>

<?php 

session_start();



$con = mysqli_connect('localhost','root', '');

mysqli_select_db($con, 'register');


if (isset($_POST['regjister'])){
  $name = $_POST['user'];
  $pass = $_POST['password'];

  // $s ="select * form  `user` where name ='$name'";
  $reg = "insert into `user`(user , password) values ('$name','$pass')";

  $result = mysqli_query($con, $reg);

  if($result){
    header('Location: register.php?success');
  }else{
    header('Location: register.php?error');

  }







  // $num = mysqli_num_rows($result);

  // if($num == 1) {
  //   echo "Username Alredy Taken";

  // }else{
  //   $reg = "insert into `user`(user , password) values ('$name','$pass')";
  //   mysqli_query($con, $reg);
  
  // }

}


?>


<section class="default-padding">
<form method="post" action="register.php">
<div class="container text-center">
    <div>
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    </div>
    <label for="user">User</label>
    <input type="text" placeholder="Username" name="user" required>
    <div>
    
    <label for="password">Password</label>
    <input type="password" placeholder="Password" name="password" required>
    </div>
    <div>
    <button type="submit" name="regjister" class="register btn btn-success">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="login.php">LogIn</a>.</p>
    
  </div>
  </form>
  </section>