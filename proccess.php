<?php  

$mysqli = new mysqli('localhost', 'root', '', 'crud_message') or die(mysqli_error($mysqli));

if (isset($_POST['send'])){
   
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


     $mysqli->query("INSERT INTO `contacti` (id, email, name, subject, message) VALUES (null,'$email', '$name', '$subject', '$message')")
      or die($mysqli->error);
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query(" DELETE * FROM `contacti` WHERE id = $id") or die($mysqli->error());
}



?>