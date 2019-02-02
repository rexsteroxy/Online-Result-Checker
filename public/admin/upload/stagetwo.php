<?php 
require_once("../../../private/initialize.php");
require_admin_login();

?>
<?php include(SHARED_PATH . '/admin_header.php');?>
<?php
if(isset($_POST['enter'])){
 $num=1;
}
?>
<?php $number=$_POST['number'] ?? " ";?>
<?php if($number<=20 AND $number>=0 ) { ?>
  <div class="container-fluid">
<h5><a class="text-danger" href="<?php echo url_for('stageone.php')?>">
Previous Page</a></h5>
</div>
<div class="container-fluid">
  <div class="row mt-sm-5">
    <div class="col-sm-5 mx-auto">
      <div class="card">
      <div class="card-header">
        <div class="card-subtitle">
           <h4 class="text-success">Fill in the required courses:</h4>
        </div>
      </div>
      <div class="card-body">
<form action="grade.php" method="POST" class="form-group">
              <div class="form-group">
              <input name="mat_number" type="text" class="form-control mb-sm-3"
              placeholder="Input Matric Number" required/>
              </div>
 <?php
 $num_courses= $_POST['number'] ?? "";
 for($i=1; $i<=$num_courses; $i++){?>
    <input name="course[]" type="text" class="form-control mb-sm-3"
    placeholder="course--><?php echo $num ?> " required/>
   <?php $num++;?>
   
 <?php } ?>
 <div class="form-group">
              <label class="text-info">Select Your Semester and Level</label>
                      <select name="semester" type="text" class="btn btn-outline-success mt-sm-2">
                      <option>FirstSemester Year One</option>
                      <option>SecondSemester Year One</option>
                      <option>FirstSemester Year Two</option>
                      <option>SecondSemester Year Two</option>
                      <option>FirstSemester Year Three</option>
                      <option>SecondSemester Year Three</option>
                      <option>FirstSemester Year Four</option>
                      <option>SecondSemester Year Four</option>
                      </select></br></br>
              </div>



<input type="submit" value="continue" name="register" class="btn btn-outline-success mt-sm-2">
</form>
      </div>
      </div>
    </div>
  </div>
</div>
<hr>
<?php }else{?>

<?php $errors[]="Please enter a course number less than 30";
$errors[]="Please enter a positive number";
?>
<a class="" href="<?php echo url_for('stageone.php')?>">
Previous Page<br></br><hr></a>
<?php foreach($errors as $error){ ?>
  <ul>
    <li><?php echo $error ; ?></li>
  </ul>
  <?php }?>
<?php }?>
<?php include(SHARED_PATH . '/admin_footer.php');?>
