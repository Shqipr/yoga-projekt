<?php include'includes/header.php'; ?>


<?php 

$mysqli = new mysqli('localhost', 'root', '', 'register' ) or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM `user`") or die($mysqli->error);
// // pre_r($result);
//  pre_r($result->fetch_assoc());
// pre_r($result->fetch_assoc());




function pre_r( $array ) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>
<section class=" ">
<div class="container">
<div class="row  ">
<table  class="table table-bordered  ">
    <thead>
        <tr style="background-color:#FFFAF0; ">
            <th >User</th>
            <th>Password</th>
            <th colspan="1">Action</th>
        </tr>
    </thead>
    <?php 
        while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['user']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td>
                <a href="user-table.php?edit= <?php echo $row['user']; ?>"
                    class="btn btn-info">Edit</a>
            <!-- </td> 
            <td> -->
                <a href="users.php?delete=<?php echo $row['id']; ?>"
                    class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endwhile ?>
</table>

</div>
</div>
</section>