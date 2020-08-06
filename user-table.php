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

<section>
<div class="container">
<div class="row">
<button type="button" class="btn btn-info " data-toggle="modal" data-target="#mymodal">  Add User </button>
<div id="mymodal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">ADD USERS</h4>
      </div>
      <div class="modal-body">
      <form method="post" action="add-user.php">
<div class="container text-center">
    <div>
    <h1>Add User</h1>
    <hr>
    </div>
    <label for="user">User</label>
    <input type="text" placeholder="Username" name="user" required>
    <div>
    
    <label for="password">Password</label>
    <input type="password" placeholder="Password" name="password" required>
    </div>
    <div>
    <button type="submit" name="regjister" class="register btn btn-success">Add</button>
  </div>

  
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
            
</div>
</div>
</section>
<section class=" ">
<div class="container">
<div class="row  ">
<table  class="table table-striped  ">
    <thead>
        <tr >
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

            <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal"> 
           Edit</button>
            <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Edit</h4>
      </div>
      <div class="modal-body">
      <label for="user">User</label>
    <input type="text" value="<?php echo $name; ?>" placeholder="Username" name="user" required>
    <div>
    
    <label for="password">Password</label>
    <input type="password" value="<?php echo $pass; ?>"  placeholder="Password" name="password" required>
    </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-info" ><a class="text-light" href="users.php?update=<?php echo $row['id']; ?>">Update</a></button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
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