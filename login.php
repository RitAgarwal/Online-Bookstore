<?php
require_once 'header1.php';
require_once '../config.php';
$username=$password="";
$username_err=$password_err=$error="";
if (isset($_POST['submit'])) {
  if (empty($_POST['username'])) {
    $username_err = "please enter email";
  }else {
    $username = mysqli_real_escape_string($link,$_POST['username']);
  }
  if (empty($_POST['password'])) {
    $password_err = "please enter password";
  }else {
    $password = mysqli_real_escape_string($link,$_POST['password']);
  }
  if (empty($username_err) && empty($password_err)) {
    $sql = "SELECT * FROM registration WHERE c_email = '$username'";
    $result = mysqli_query($link,$sql);
    if (mysqli_num_rows($result)>0) {
      while ($row = mysqli_fetch_array($result)) {
        if (password_verify($password,$row['c_password'])) {
          $_SESSION['loggedin'] = true;
          $_SESSION['id'] = $row['c_email'];
          $_SESSION['name'] = $row['c_name'];
          header('location: index.php');
        }else {
          $error = "invalid email or password";
        }
      }

    }else {
      $error="invalid username or password";
    }
  }
}
 ?>
 <div class="container">
   <div class="row">
  <!--   <div class="col-sm-4"></div> -->
     <div class="col-sm-4">
       <span id="help"></span>
       <h4>Login Into FoxBooks</h4>
       <span class="text-danger"><?php echo $error; ?></span>
       <form class="" action="" method="post">
         <div class="form-group">
           <i class="fa fa-envelope"></i><label for="">&nbsp; Email</label>
           <input type="text" name="username" id="email" value="" class="form-control" placeholder="Enter email">
           <span class="text-danger"><?php echo $username_err ?></span>
         </div>
         <div class="form-group">
           <i class="fa fa-key"></i><label for="">&nbsp; Password</label>
           <input type="password" name="password" id="password" value="" class="form-control" placeholder="Enter password" >
           <span class="text-danger"><?php echo $password_err ?></span>
         </div>
         <div class="form-group">
           <input type="submit"  name="submit" value="Login" class="btn btn-success" style="width: 100%">
         </div>
       </form>
     </div>
     <div class="col-sm-8">
       <div class="slideshow-container">

<div class="mySlides fade">

  <img src="images/q1.jpg" style="width:100%">
</div>

<div class="mySlides fade">

  <img src="images/q2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  
  <img src="images/q3.jpg" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>
     </div>
   </div>
 </div>
 <?php include_once 'footer.php'; ?>
