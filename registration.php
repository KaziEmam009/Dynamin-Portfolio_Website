<?php
session_start();
require_once 'includes/header-starlight.php';


?>
 <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">
  
   <form action="registration_post.php" method="POST">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">starlight <span class="tx-info tx-normal">admin</span></div>
        <div class="tx-center mg-b-60">Professional Admin Template Design</div>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter your Full Name" name="full_name">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Enter your Email Address" name="email_address">

          <?php 
      if (isset($_SESSION['duplicate_email_error'])){
        ?>
        <small class="text-danger">
        <?php
               echo $_SESSION['duplicate_email_error'];
               unset($_SESSION['duplicate_email_error']);              
        ?>
        </small>
      <?php
         } 
      ?>
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your Password"  name="password">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your Confirm Password"  name="confirm_password">
        </div><!-- form-group -->
        <div class="form-group">
          <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Gender</label>
          <div class="row row-xs">
            <div class="col-sm-12">

                 <label class="rdiobox">
                    <input name="gender" type="radio" value="male">
                    <span>Male</span>
                 </label> 

                 <label class="rdiobox">
                    <input name="gender" type="radio" value="female">
                    <span>Female</span>
                 </label> 

                 <label class="rdiobox">
                    <input name="gender" type="radio" value="other">
                    <span>Other</span>
                 </label> 

            </div><!-- col-4 -->
            </div><!-- row -->
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block">Sign Up</button>
        </form>
        <!-- #################### -->

        <div class="mg-t-40 tx-center">Already have an account? <a href="login.php" class="tx-info">Sign In</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

<!-- ******************************************* -->


<?php
require_once 'includes/footer-starlight.php';
?>



  




     