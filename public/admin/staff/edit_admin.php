<?php
require_once('../../../private/initialize.php');
//if($_SESSION['level']=="SuperAdmin"){
require_admin_login();
if(!isset($_GET['id'])){
  redirect_to(url_for('/admin/staff/index.php'));
}

$id = $_GET['id'];
$admin = Admin::find_by_id($id);
if($admin == false){
    redirect_to(url_for('/admin/staff/index.php'));
}

if(is_post_request()){
$args= $_POST['admin'] ?? NULL;
$admin->merge_attributes($args);
$result=$admin->save();
    if($result == true ){
        $session->message('Student was edited succesfully');
        redirect_to(url_for('/admin/staff/show_admin.php?id='. $id));
    }else{
 
    }

}
 else{

}


?>

<?php $page_title = 'edit ' . $admin->name; ?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>

<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-7 col-lg-6 col-sm-3">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">EDIT ADMINSTRATORS</h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/staff/index.php')?>">&laquo; Back to List</a></h5>

    <?php echo display_errors($admin->errors) ?>

    <form action="<?php echo url_for('/admin/staff/edit_admin.php?id='. 
    h(u($admin->id))); ?>" method="post">
                   <div>
                 <input type="text" name="admin[name]" required 
                 value="<?php echo h($admin->name); ?>" class="form-control theForm" >  
                    </div>
                    <div class="form-group">
                        <input type="email" name="admin[email]" required 
                        value="<?php echo h($admin->email); ?>" class="form-control theForm" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="admin[pass]"  
                        placeholder="Enter Your Password" class="form-control theForm">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="admin[confirm_password]"  placeholder="Confirm_Password" class="form-control theForm">
                    </div>
                    <label class="text-info">Select Admin Level</label>
                      <select name="admin[level]" type="text" class="btn btn-outline-success mt-sm-2"> 
                      <option value="<?php echo $option1="SuperAdmin"; ?>" 
                        <?php if($admin->level == $option1)
                        {echo 'selected';}?>>SuperAdmin</option>
                        <option value="<?php echo $option2="NormalAdmin"; ?>" 
                        <?php if($admin->level == $option2)
                        {echo 'selected';}?>>NormalAdmin</option>
                    </select>
                    <div class="btn text-center">
                            <button type="submit"  class="btn btn-primary">Submit</button>
                           
                    </div>
    </form>

  </div>	</div>	</div>	</div>	</div>	</div>	</div>
<br><br>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
<?php //} 
//else{
  //redirect_to(url_for('/admin/index.php'));
//} 
?>