<?php add_user(); ?>
  <h1 class="page-header">
      Add User
      <small>Page</small>
  </h1>

<div class="col-md-6 user_image_box">
    
<span id="user_admin" class='fa fa-user fa-4x'></span>

</div>


<form action="" method="post" enctype="multipart/form-data">




  <div class="col-md-6">

     <div class="form-group">
     
      <!-- <input type="file" name="file"> -->
         
     </div>


     <div class="form-group">
      <label for="user_name">Username</label>
      <input type="text" name="user_name" class="form-control" >
         
     </div>


      <div class="form-group">
          <label for="user_mail">Email</label>
      <input type="text" name="user_mail" class="form-control"   >
         
     </div>

<!-- 
      <div class="form-group">
          <label for="first name">First Name</label>
      <input type="text" name="first_name" class="form-control"   >
         
     </div> -->
<!-- 
      <div class="form-group">
          <label for="last name">Last Name</label>
      <input type="text" name="last_name" class="form-control"   >
         
     </div> -->


      <div class="form-group">
          <label for="user_password">Password</label>
      <input type="password" name="user_password" class="form-control"  >
         
     </div>

      <div class="form-group">

      <a id="user-id" class="btn btn-danger" href="">Delete</a>

      <input type="submit" name="add_user" class="btn btn-primary pull-right" value="Add User" >
         
     </div>


      

  </div>



</form>





    