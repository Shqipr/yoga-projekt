<?php include'includes/header.php'; ?>


<section class="default-padding">
<form method="post" action="login.php">
<div class="container text-center">
    <div>
    <h1>Log In</h1>
    <hr>
    </div>
    <label for="user"><b>Username</b></label>
    <input type="text" placeholder="Username" name="user"  >
    <div>
    </div>
   
    <div>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" >
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