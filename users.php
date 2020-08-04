<?php  

$mysqli = new mysqli('localhost', 'root', '', 'register') or die(mysqli_error($mysqli));

if (isset($_POST['send'])){
   
    $name = $_POST['user'];
    $pass = $_POST['password'];
   


     $mysqli->query("INSERT INTO `user` (user, password) VALUES ('$name', '$pass')")
      or die($mysqli->error);
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query(" DELETE * FROM `user` WHERE id = $id") or die($mysqli->error());
}



?>