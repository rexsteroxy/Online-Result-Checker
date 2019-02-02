<?php
require_once('../../../private/initialize.php');
require_admin_login();
$id = $_GET['id'] ?? false;
   if(!$id){
  redirect_to('index.php');
}
//handle the error message if the user types the url id by himself.
$student= Student::find_by_id($id);
?>
<?php 
$page_title = $student->name;
include(SHARED_PATH . "/admin_header.php");
?>
<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-12 col-lg-12 col-sm-12">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center"><?php  echo $student->name ?></h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/student/index.php')?>">
            &laquo; Back to List</a></h5>
	<div id="attributes">
	    <table class="table table-striped table-bordered table-hover table-condensed">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Matnumber</th>
        <th>Email</th>
        <th>Institution</th>
        <th>Department</th>
        <th>Admission Year</th>
        <th>time</th>
      </tr>
      
     
      <tr>
        <td> <?php echo $student->id; ?></td>
        <td> <?php echo $student->name; ?></td>
        <td> <?php echo $student->matnumber; ?></td>
        <td> <?php echo $student->email; ?></td>
        <td> <?php echo $student->institution; ?></td>
        <td> <?php echo $student->department; ?></td>
        <td> <?php echo  $student->year ; ?></td>
        <td> <?php echo $student->time; ?></td>
        </tr>
        
        
        
     
    </table>
    
      
    </div>

  </div>	</div>	</div>	</div>	</div>	</div>	</div>
<br><br>


<?php include(SHARED_PATH . "/admin_footer.php");?>
