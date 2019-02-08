<?php 
require_once("../../../private/initialize.php");
require_admin_login();
  
?>
<?php 
//This is for inserting the caluculated GP result into the database
if(isset($_POST["save"])){
 include(SHARED_PATH . '/gp_insert.php');
}
?>
<?php
//redirect_to('index.php') i wanted to but it is not working , dont really know why;
if(isset($_POST['calculate'])) { ?>
<?php $page_title="GP RESULT"?>
<?php include(SHARED_PATH . '/admin_header.php');?>
<?php
include(SHARED_PATH . '/grade_insert.php');
//collecting array data for grades from input forms
$grades = $_POST['grade'] ?? "";
$total_courses=count($grades);
$gp=0;
$mgp=0;
$total_courseunit=0;
//collecting array data for units from inputs forms
$units = $_POST['unit'] ?? "";
//function for calculating the gp
for($i=0; $i<count($units); $i++){
  $total_courseunit= $total_courseunit + $units[$i];
 if($grades[$i]=="A"){
     $grades[$i]=5;
    $tg =$grades[$i] * $units[$i];
     $gp = $gp + $tg;
 }
 if($grades[$i]=="B"){
     $grades[$i]=4;
     $tg =$grades[$i] * $units[$i];
     $gp = $gp + $tg;
 }
 if($grades[$i]=="C"){
     $grades[$i]=3;
     $tg =$grades[$i] * $units[$i];
     $gp = $gp + $tg;
 }
 if($grades[$i]=="D"){
     $grades[$i]=2;
     $tg =$grades[$i] * $units[$i];
     $gp = $gp + $tg;
 }
 if($grades[$i]=="E"){
     $grades[$i]=1;
     $tg =$grades[$i] * $units[$i];
     $gp = $gp + $tg;
 }
 if($grades[$i]=="F"){
     $grades[$i]=0;
     $tg =$grades[$i] * $units[$i];
     $gp = $gp + $tg;
 }
}
$mgp = $gp / $total_courseunit;
$result=$mgp;
if($result){ ?>
<div class="container-fluid">
<div class="row mt-sm-5">
<div class="col-sm-5 mx-auto">
<div class="card">
<div class="card-header">
  <div class="card-subtitle">
     <h4 class="text-success">Your Grade Point Have Been Calculated</h4>
     <h5><a class="text-info" >
      Click On The Save Button Below !!</a></h5>
  </div> 
</div>

<div class="card-body">
<?php
$mat_number_s = $_POST['mat_number'] ?? "";
$semester_s = $_POST['semester'] ?? "";
 ?>
  <form  class="form-group" action="grade.php" method="POST">
  
  <span>Total Units: </span>
  <input class="form-control mb-sm-3" value="<?php echo h($total_courseunit) ;  ?>">
  <span>Grade Point : </span>
  <input class="form-control mb-sm-3" value="<?php echo h(number_format($mgp, 2)) ; ?>" name="gp">
  
  <select name="semester" type="text" class="btn btn-outline-success mt-sm-2">
                      <option><?php echo $semester_s ; ?></option>
  </select></br></br>
  <select name="mat_number" type="text" class="btn btn-outline-success mt-sm-2">
                      <option><?php echo $mat_number_s ;?></option>
  </select></br></br>
  
  <div class="btn text-center">
  <button type="submit"  name="save" class="btn btn-info">Save</button>
  </div>
  </form>
</div>
   </div>
   </div>
  </div>
  </div>  
  <hr>
  <?php } ?>
  <?php include(SHARED_PATH . '/admin_footer.php');?>
<?php } ?>

<?php
//This is for inserting the inputed number of courses into the database
if(isset($_POST['register'])){
 include_once(SHARED_PATH . '/course_insert.php');

?>
<?php $page_title="Enter Result details"?>
<?php include(SHARED_PATH . '/admin_header.php');?>
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
           <h4 class="text-success">Select Your Grade And Enter The Corresponding CourseUnit!!</h4>
        </div>
      </div>
      <div class="card-body">

<form action="grade.php" method="POST">
 <?php
 //collecting array data for courses from the form in the index page
 $p_courses = $_POST['course'] ?? "";
 $mat_number = $_POST['mat_number'] ?? "";
 $semester = $_POST['semester'] ?? "";
 //looping through the array data($courses) so that i can echo it in this form
 foreach($p_courses as $p_course){?>
    <label><?php echo h($p_course).":" ;?></label>
    <select name="grade[]" type="text" class="btn btn-outline-success mt-sm-2">
    <option>A</option>
    <option>B</option>
    <option>C</option>
    <option>D</option>
    <option>E</option>
    <option>F</option>
    </select></br></br>
    <labe><?php echo"Course Unit:" ;?></label>
    <input name="unit[]" type="number" required min="1" max="40" class="btn btn-outline-primary "></br></br>
 <?php } ?>
 <div class="form-group">
 <select name="semester" type="text" class="btn btn-outline-success mt-sm-2">
                      <option><?php echo $semester ; ?></option>
  </select></br></br> 
              <select name="mat_number" type="text" class="btn btn-outline-success mt-sm-2">
                      <option><?php echo $mat_number ;?></option>
  </select></br></br>
                      
              </div>
<input type="submit" value="calculate" name="calculate" class="btn btn-outline-success mt-sm-2">
</form>
      </div>
      </div>
    </div>
  </div>
</div>
<hr>
<?php include(SHARED_PATH . '/admin_footer.php');?>
<?php }  ?>


 
