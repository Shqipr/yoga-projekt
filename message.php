
<?php include'includes/header.php'; ?>


<?php 

$mysqli = new mysqli('localhost', 'root', '', 'crud_message' ) or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM `contacti`") or die($mysqli->error);
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
            <th >Email</th>
            <th>Derguar nga:</th>
            <th>Subject</th>
            <th>Message</th>
            <th colspan="1">Action</th>
        </tr>
    </thead>
    <?php 
        while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['subject']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td>
                <a href="proccess.php?delete=<?php echo $row['id']; ?>"
                    class="btn btn-danger">Delete</a>
            </td>
        </tr>
        
        <?php endwhile ?>
</table>

</div>
</div>
</section>