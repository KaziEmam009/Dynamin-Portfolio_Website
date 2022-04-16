<?php
session_start();

require_once 'includes/db.php';
require_once 'includes/header.php';
require_once 'includes/nav.php';
$email_address_from_login_page = $_SESSION['email_address_from_login_page'];
$all_brands_query = "SELECT * FROM brands";
$all_brands_from_db = mysqli_query($db_connect, $all_brands_query);


?>
<div class="row">
  <div class="col-12 col-md-6">
  <div class="card mb-3">
  <div class="card-header bg-info text-center ">
     change Service List
    </div>
           <div class="card-body">
            <table class="table table-success table-striped table-bordered">
              <thead>
                <tr>
                 <th>Brand Image</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                    foreach($all_brands_from_db as $brand):
                  ?>
              <tr>
                    <td>
                        <img src="img/brand_image/<?=$brand['brand_image_name']?>" alt="">
                    </td>
              </tr>
               <?php  endforeach; ?>

               </tbody>
            </table>
       </div>
      </div>
  </div>
  <div class="col-12 col-md-6">
    <div class="card mb-3">
  <div class="card-header bg-info text-center ">
     Add Portfolio
    </div>
     <div class="card-body">
         <?php if(isset($_SESSION['status'])):?>
         <div class="alert alert-success">
            <?=$_SESSION['status']?>
            <?php
            unset($_SESSION['status']);
            ?>
         </div>
          <?php endif; ?>
         <form action="portfolio_post.php" method="POST" enctype="multipart/form-data">
             <div class="form-group">
                     <label for="exampleInputPassword1">Portfolio Title</label>
                     <input type="text" class="form-control" name="portfolio_title">
             </div>

             <div class="form-group">
                     <label for="exampleInputPassword1">Portfolio Details</label>
                     <textarea name="portfolio_details" class="form-control" rows="4"></textarea>
             </div>

              <!-- <div class="form-group">
                     <label for="exampleInputPassword1">Portfolio_Thumbnil</label>
                     <input type="file" class="form-control" name="	portfolio_thumbnil">
             </div>  -->

              <div class="form-group">
                     <label for="exampleInputPassword1">Portfolio_Feature_Photo</label>
                     <input type="file" class="form-control" name="portfolio_feature_photo">
             </div>

             <button type="submit" class="btn btn-success">Add Now</button>
        </form>
       </div>
      </div>
    </div>
</div>

    </div>
  </div>
