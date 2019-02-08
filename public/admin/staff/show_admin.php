<?php
require_once('../../../private/initialize.php');
//if($_SESSION['level']=="SuperAdmin"){
  require_admin_login();
  $id = $_GET['id'] ?? false;
     if(!$id){
    redirect_to('index.php');
  }
  //handle the error message if the user types the url id by himself.
  $admin= Admin::find_by_id($id);
  ?>
<?php
$page_title = $admin->name;
include(SHARED_PATH . "/admin_header.php");
?>
<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-12 col-lg-12 col-sm-12">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center"><?php  echo $admin->name ?></h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/staff/index.php')?>">
            &laquo; Back to List</a></h5>
	<div id="attributes">
	    <table class="table table-striped table-bordered table-hover table-condensed">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Level</th>
        <th>time</th>
      </tr>
      
     
      <tr>
        <td> <?php echo $admin->id; ?></td>
        <td> <?php echo $admin->name; ?></td>
        <td> <?php echo $admin->email; ?></td>
        <td> <?php echo $admin->level; ?></td>
        <td> <?php echo $admin->time; ?></td>
        </tr>
        
        
        
     
    </table>
    
      
    </div>

  </div>	</div>	</div>	</div>	</div>	</div>	</div>
<br><br>


<?php include(SHARED_PATH . "/admin_footer.php");?>

<?php //} 
//else{
 // redirect_to(url_for('/admin/index.php'));
//} 
?>