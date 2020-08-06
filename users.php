<?php  

$mysqli = new mysqli('localhost', 'root', '', 'register') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$name = '';
$pass = '';

if (isset($_POST['send'])){
   
    $name = $_POST['user'];
    $pass = $_POST['password'];
   


     $mysqli->query("INSERT INTO `user` (user, password) VALUES ('$name', '$pass')")
      or die($mysqli->error);

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM `user` WHERE id=$id") or die($mysqli->error());

    header ('location:user-table.php');
}


if (isset($_GET['edit'])){
    $id = $_GET['id'];
    $update = true;
    $_result = $mysqli->query("SELECT FROM `user` WHERE id=$id") or die($mysqli->error());
    if (count($_result)==1){
        $row = $result->fetch_array();
        $name = $row['name'];
        $pass = $row['password'];
     
    header ('location:user-table.php');
    }
}

?>