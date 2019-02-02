<?php
require_once('../../../private/initialize.php');
   
require_admin_login();

$page_title = "Create New Admin";
include_once(SHARED_PATH .'/admin_header.php');

if(is_post_request()){
    $args=$_POST['admin'] ?? '';

$admin= new Admin($args);
 $result = $admin->save();
  if($result === true){
      $new_id = $admin->id;
      $session->message('Student was created succesfully');
    redirect_to(url_for('/admin/staff/show_admin.php?id=' . $new_id));
}
else{
    $errors=$result;
}
}else{
    $admin= new Admin;
}

?>
<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-7 col-lg-6 col-sm-4">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">Create New Admin</h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/staff/index.php'); ?>">&laquo; Back to List</a></h5>
            <?php echo display_errors($admin->errors);?>
    <form action="<?php echo url_for('/admin/staff/create_admin.php'); ?>" method="POST">
    <div class="form-group">
                        <input type="text" name="admin[name]" required placeholder="Enter Your Name" class="form-control theForm" >  
                    </div>
                    <div class="form-group">
                        <input type="email" name="admin[email]" required placeholder="Enter Your Email" class="form-control theForm" >
                    </div>
                    <div class="form-group">
                        <input type="password" name="admin[pass]" required placeholder="Enter Your Password" class="form-control theForm">
                    </div>
                    <div class="form-group">
                        <input type="password"  name="admin[confirm_password]" required placeholder="Confirm_Password" class="form-control theForm">
                    </div>
                    <label class="text-info">Select Admin Level</label>
                      <select name="admin[level]" type="text" class="btn btn-outline-success mt-sm-2"> 
                        <option>SuperAdmin</option>
                        <option>NormalAdmin</option>
                    </select>
                    <div class="btn text-center">
                            <button type="submit"  class="btn btn-primary">Submit</button>
                           
                    </div>
                </form>

  </div>	</div>	</div>	</div>	</div>	</div>	</div>
  </br></br>

<?php include_once(SHARED_PATH .'/admin_footer.php') ;?>
 
