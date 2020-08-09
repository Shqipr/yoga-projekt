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
    header('Location: user-table.php?success');
  }else{
    header('Location: user-table.php?error');

  }
}
?>