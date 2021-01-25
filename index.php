<?php
require_once 'header.php';
require_once '../config.php';
$output=''; ?>
 <div class="container">
   <div class="row">
     <div class="col-sm-3">
       <table class="sidebar">
         <tr><td>CATEGORIES</td></tr>
         <tr><td><a href="bestseller.php">Best Sellers</a></td></tr>
         <tr><td><a href="Action&Adventure.php">Action & Adventure</a></td></tr>
         <tr><td><a href="business_management.php">Business & Management</a></td></tr>
         <tr><td><a href="fantasy.php">Fantasy</a></td></tr>
         <tr><td><a href="science_fiction.php">Science Fiction</a></td></tr>
         <tr><td><a href="horror.php">Horror</a></td></tr>

       </table>
     </div>
     <div class="col-sm-9">
       <span id="status"></span>
       <div class="tag">BEST SELLERS</div>
        <div class="row">
         <?php
            $sql = "SELECT *FROM book WHERE category ='Best Seller' ORDER BY book_id ASC LIMIT 6";
            $result = mysqli_query($link,$sql);
            while ($row = mysqli_fetch_array($result)) {
              $output .='<div class="col-sm-4" id="product">
                    <img src="'.$row['img'].'" width="80%" height="200" id="center">
                    <h5 style="font-size: medium"id="center"> '.$row['book_name'].'</h5>
                    <h6 style="font-size: small"id="center">By '.$row['author'].'</h6>
                    <h6 style="font-size: larger;color:red;font-family:Verdana"id="center">&#x20b9 '.$row['price'].'</h6>
                    <form name="form" method="post">
                    <input type="hidden" name="book_id" id="book_id'.$row['book_id'].'" value="'.$row['book_id'].'">
                    <input type="hidden" name="book_name" id="book_name'.$row['book_id'].'" value="'.$row['book_name'].'">
                    <input type="hidden" name="img" id="img'.$row['book_id'].'" value="'.$row['img'].'">
                    <input type="hidden" name="price" id="price'.$row['book_id'].'" value="'.$row['price'].'">';
                    if (!isset($_SESSION['loggedin'])) {
                      $output.= '<input type="submit" name="submit" value="Add To Cart"  class="btn btn-primary login"   style="width:80%;background-color:crimson;font-family:Arial;padding-left:12px;margin-left:23px;" >';
                    }else {
                      $output .= '<button type="button" id="'.$row['book_id'].'" class="btn btn-primary" style="width:80%;background-color:crimson;font-family:Arial;padding-left:12px;margin-left:23px;">Add To Cart</button>';
                    }
                    $output .='</form></div>';


            }

            echo $output;


          ?>
          <div class="more"><a href="bestseller.php" style="padding-left:18px;">View more of bestsellers</a><br></div>

      </div>
          <br>
          <div class="tag">Action & Adventure</div>
          <div class="row">
            <?php
              $output='';
               $sql = "SELECT *FROM book WHERE category ='Action And Adventure' ORDER BY book_id ASC LIMIT 6";
               $result = mysqli_query($link,$sql);
               while ($row = mysqli_fetch_array($result)) {
                 $output .='<div class="col-sm-4" id="product">
                       <img src="'.$row['img'].'" width="80%" height="200"id="center">
                       <h5 style="font-size: medium"id="center"> '.$row['book_name'].'</h5>
                       <h6 style="font-size: small"id="center">By '.$row['author'].'</h6>
                       <h6 style="font-size: larger;color:red;font-family:Verdana"id="center">&#x20b9 '.$row['price'].'</h6>
                       <form name="form" method="post">
                       <input type="hidden" name="book_id" id="book_id'.$row['book_id'].'" value="'.$row['book_id'].'">
                       <input type="hidden" name="book_name" id="book_name'.$row['book_id'].'" value="'.$row['book_name'].'">
                       <input type="hidden" name="img" id="img'.$row['book_id'].'" value="'.$row['img'].'">
                       <input type="hidden" name="price" id="price'.$row['book_id'].'" value="'.$row['price'].'">';
                       if (!isset($_SESSION['loggedin'])) {
                         $output.= '<input type="submit" name="submit" value="Add To Cart"  class="btn btn-primary login" style="width:80%; background-color:crimson;font-family:Arial;padding-left:15px;margin-left:23px;" >';
                       }else {
                         $output .= '<button type="button" id="'.$row['book_id'].'" class="btn btn-primary" style="width:80%;background-color:crimson;font-family:Arial;padding-left:12px;margin-left:23px;">Add To Cart</button>';
                       }
                       $output .='</form></div>';


               }

               echo $output;


             ?>
             <div class="more"><a href="Action&Adventure.php" style="padding-left:18px;">View more of Action & Aventure</a><br></div>
           </div>
           <br>
           <div class="tag">Business & Management</div>
           <div class="row">
             <?php
               $output='';
                $sql = "SELECT *FROM book WHERE category ='bm' ORDER BY book_id ASC LIMIT 6";
                $result = mysqli_query($link,$sql);
                while ($row = mysqli_fetch_array($result)) {
                  $output .='<div class="col-sm-4" id="product">
                        <img src="'.$row['img'].'" width="80%" height="200"id="center">
                        <h5 style="font-size: medium"id="center"> '.$row['book_name'].'</h5>
                        <h6 style="font-size: small"id="center">By '.$row['author'].'</h6>
                        <h6 style="font-size: larger;color:red;font-family:Verdana"id="center">&#x20b9 '.$row['price'].'</h6>
                        <form name="form" method="post">
                        <input type="hidden" name="book_id" id="book_id'.$row['book_id'].'" value="'.$row['book_id'].'">
                        <input type="hidden" name="book_name" id="book_name'.$row['book_id'].'" value="'.$row['book_name'].'">
                        <input type="hidden" name="img" id="img'.$row['book_id'].'" value="'.$row['img'].'">
                        <input type="hidden" name="price" id="price'.$row['book_id'].'" value="'.$row['price'].'">';
                        if (!isset($_SESSION['loggedin'])) {
                          $output.= '<input type="submit" name="submit" value="Add To Cart"  class="btn btn-primary login" style="width:80%; background-color:crimson;font-family:Arial;padding-left:15px;margin-left:23px;" >';
                        }else {
                          $output .= '<button type="button" id="'.$row['book_id'].'" class="btn btn-primary" style="width:80%;background-color:crimson;font-family:Arial;padding-left:12px;margin-left:23px;">Add To Cart</button>';
                        }
                        $output .='</form></div>';


                }

                echo $output;


              ?>
              <div class="more"><a href="business_management.php" style="padding-left:18px;">View more of Business & Management</a><br></div>
            </div>
            <br>
            <div class="tag">Fantasy</div>
            <div class="row">
              <?php
                $output='';
                 $sql = "SELECT *FROM book WHERE category ='Fantasy' ORDER BY book_id ASC LIMIT 6";
                 $result = mysqli_query($link,$sql);
                 while ($row = mysqli_fetch_array($result)) {
                   $output .='<div class="col-sm-4" id="product">
                         <img src="'.$row['img'].'" width="80%" height="200"id="center">
                         <h5 style="font-size: medium"id="center"> '.$row['book_name'].'</h5>
                         <h6 style="font-size: small"id="center">By '.$row['author'].'</h6>
                         <h6 style="font-size: larger;color:red;font-family:Verdana"id="center">&#x20b9 '.$row['price'].'</h6>
                         <form name="form" method="post">
                         <input type="hidden" name="book_id" id="book_id'.$row['book_id'].'" value="'.$row['book_id'].'">
                         <input type="hidden" name="book_name" id="book_name'.$row['book_id'].'" value="'.$row['book_name'].'">
                         <input type="hidden" name="img" id="img'.$row['book_id'].'" value="'.$row['img'].'">
                         <input type="hidden" name="price" id="price'.$row['book_id'].'" value="'.$row['price'].'">';
                         if (!isset($_SESSION['loggedin'])) {
                           $output.= '<input type="submit" name="submit" value="Add To Cart"  class="btn btn-primary login" style="width:80%; background-color:crimson;font-family:Arial;padding-left:15px;margin-left:23px;" >';
                         }else {
                           $output .= '<button type="button" id="'.$row['book_id'].'" class="btn btn-primary" style="width:80%;background-color:crimson;font-family:Arial;padding-left:12px;margin-left:23px;">Add To Cart</button>';
                         }
                         $output .='</form></div>';


                 }

                 echo $output;


               ?>
               <div class="more"><a href="fantasy.php" style="padding-left:18px;">View more of Fantasy</a><br></div>
             </div>
             <br>
             <div class="tag">Science Fiction</div>
             <div class="row">
               <?php
                 $output='';
                  $sql = "SELECT *FROM book WHERE category ='sf' ORDER BY book_id ASC LIMIT 6";
                  $result = mysqli_query($link,$sql);
                  while ($row = mysqli_fetch_array($result)) {
                    $output .='<div class="col-sm-4" id="product">
                          <img src="'.$row['img'].'" width="80%" height="200"id="center">
                          <h5 style="font-size: medium"id="center"> '.$row['book_name'].'</h5>
                          <h6 style="font-size: small"id="center">By '.$row['author'].'</h6>
                          <h6 style="font-size: larger;color:red;font-family:Verdana"id="center">&#x20b9 '.$row['price'].'</h6>
                          <form name="form" method="post">
                          <input type="hidden" name="book_id" id="book_id'.$row['book_id'].'" value="'.$row['book_id'].'">
                          <input type="hidden" name="book_name" id="book_name'.$row['book_id'].'" value="'.$row['book_name'].'">
                          <input type="hidden" name="img" id="img'.$row['book_id'].'" value="'.$row['img'].'">
                          <input type="hidden" name="price" id="price'.$row['book_id'].'" value="'.$row['price'].'">';
                          if (!isset($_SESSION['loggedin'])) {
                            $output.= '<input type="submit" name="submit" value="Add To Cart"  class="btn btn-primary login" style="width:80%; background-color:crimson;font-family:Arial;padding-left:15px;margin-left:23px;" >';
                          }else {
                            $output .= '<button type="button" id="'.$row['book_id'].'" class="btn btn-primary" style="width:80%;background-color:crimson;font-family:Arial;padding-left:12px;margin-left:23px;">Add To Cart</button>';
                          }
                          $output .='</form></div>';


                  }

                  echo $output;


                ?>
                <div class="more"><a href="science_fiction.php" style="padding-left:18px;">View more of Science Fiction</a><br></div>
              </div>
              <br>
              <div class="tag">Horror</div>
              <div class="row">
                <?php
                  $output='';
                   $sql = "SELECT *FROM book WHERE category ='Horror' ORDER BY book_id ASC LIMIT 6";
                   $result = mysqli_query($link,$sql);
                   while ($row = mysqli_fetch_array($result)) {
                     $output .='<div class="col-sm-4" id="product">
                           <img src="'.$row['img'].'" width="80%" height="200"id="center">
                           <h5 style="font-size: medium"id="center"> '.$row['book_name'].'</h5>
                           <h6 style="font-size: small"id="center">By '.$row['author'].'</h6>
                           <h6 style="font-size: larger;color:red;font-family:Verdana"id="center">&#x20b9 '.$row['price'].'</h6>
                           <form name="form" method="post">
                           <input type="hidden" name="book_id" id="book_id'.$row['book_id'].'" value="'.$row['book_id'].'">
                           <input type="hidden" name="book_name" id="book_name'.$row['book_id'].'" value="'.$row['book_name'].'">
                           <input type="hidden" name="img" id="img'.$row['book_id'].'" value="'.$row['img'].'">
                           <input type="hidden" name="price" id="price'.$row['book_id'].'" value="'.$row['price'].'">';
                           if (!isset($_SESSION['loggedin'])) {
                             $output.= '<input type="submit" name="submit" value="Add To Cart"  class="btn btn-primary login" style="width:80%; background-color:crimson;font-family:Arial;padding-left:15px;margin-left:23px;" >';
                           }else {
                             $output .= '<button type="button" id="'.$row['book_id'].'" class="btn btn-primary" style="width:80%;background-color:crimson;font-family:Arial;padding-left:12px;margin-left:23px;">Add To Cart</button>';
                           }
                           $output .='</form></div>';


                   }

                   echo $output;


                 ?>
                 <div class="more"><a href="horror.php" style="padding-left:18px;">View more of Horror</a><br></div>
               </div>
               <br>
          </div>
       </div>
     </div>
   </div>
</div>
<!-- Login Modal -->
<div class="modal" id="LoginModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login to FoxBooks</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <span id="help" class="text-danger"></span>
        <form class="" action="" method="post">
          <div class="form-group">
            <i class="fa fa-envelope"></i><label for="">&nbsp;Email</label>
            <input type="text" name="username" id="username" value="" class="form-control" placeholder="Enter email">
          <!--  <span class="text-danger"><?php echo $username_err ?></span> -->
          </div>
          <div class="form-group">
            <i class="fa fa-key"></i><label for="">&nbsp;Password</label>
            <input type="password" name="password" id="password" value="" class="form-control" placeholder="Enter password" >
          <!--  <span class="text-danger"><?php echo $password_err ?></span> -->
          </div>
          <div class="form-group">
            <button type="button" id="login" name="submit" value="Login" class="btn btn-success" style="width: 100%">Login</button>
          </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <h6>New to FoxBooks? <a href="signup.php">Join now</a><h6>
      </div>

    </div>
  </div>
</div>
<?php require_once 'footer.php'; ?>
