<?php
session_start();

require_once 'includes/db.php';
require_once 'includes/header.php';
require_once 'includes/nav.php';
$email_address_from_login_page = $_SESSION['email_address_from_login_page'];
$all_factarea_query = "SELECT * FROM factarea";
$all_factarea_from_db = mysqli_query($db_connect, $all_factarea_query);


?>
<div class="row">
  <div class="col-12 col-md-6"> 
  <div class="card mb-3">
  <div class="card-header bg-info text-center ">
     change Fact-area List
    </div>
           <div class="card-body">
            <table class="table table-success table-striped table-bordered">
              <thead>
                <tr>
                 <th>Fact icon</th>
                 <th>Fact Amount</th>
                 <th>Fact Title</th>
                
                </tr>
              </thead>
              <tbody>
                  <?php
                    foreach($all_factarea_from_db as $factarea):
                  ?>
                 <tr>
                    <td>
                        <i class="<?=$factarea['factarea_icon']?>"></i>
                    </td>
                    <td><?=$factarea['factarea_amount']?></td>
                    <td><?=$factarea['factarea_title']?></td>
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
     Add services
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
         <form action="factarea_post.php" method="POST">                    
             <div class="form-group">
                     <label for="exampleInputPassword1">Fact Icon</label>
                     <input type="text" class="form-control" name="factarea_icon">
                     <a href="https://fontawesome.com/v4/icons/" target="_blank">Fact Icon list</a>
             </div>                 
             <div class="form-group">
                     <label for="exampleInputPassword1">Fact Amount</label>
                     <input type="text" class="form-control" name="factarea_amount">
             </div>                 
             <div class="form-group">
                     <label for="exampleInputPassword1">Fact Title</label>
                   <textarea name="factarea_title" class="form-control" rows="4"></textarea>
             </div>                 
             <button type="submit" class="btn btn-success">Add Now</button>
        </form>
       </div>
      </div>
    </div>
</div>

    </div>
  </div>



 
  
       
  


