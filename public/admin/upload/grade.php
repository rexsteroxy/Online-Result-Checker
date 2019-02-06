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
include(SHARED_PATH . '/score_insert.php');
include(SHARED_PATH . '/unit_insert.php');
//collecting array data for grades from input forms
$scores = $_POST['score'] ?? "";
$total_courses=count($scores);
$gp=0;
$mgp=0;
$grades=[];
$total_courseunit=0;
//collecting array data for units from inputs forms
$units = $_POST['unit'] ?? "";
//function for calculating the gp
for($i=0; $i<count($units); $i++){
  $total_courseunit= $total_courseunit + $units[$i];
 if($scores[$i] >=70 AND $scores[$i] <=100){
     $grades[$i]=5;
    $tg =$grades[$i] * $units[$i];
     $gp = $gp + $tg;
     if($grades[$i]===5){
      $grade[]="A";
     }
 }
 elseif($scores[$i] >=60 AND $scores[$i] <=69){
     $grades[$i]=4;
     $tg =$grades[$i] * $units[$i];
     $gp = $gp + $tg;
     if($grades[$i]===4){
      $grade[]="B";
     }
 }
 elseif($scores[$i] >=50 AND $scores[$i] <=59){
     $grades[$i]=3;
     $tg =$grades[$i] * $units[$i];
     $gp = $gp + $tg;
     if($grades[$i]===3){
      $grade[]="C";
     }
 }
 elseif($scores[$i] >=45 AND $scores[$i] <=49){
     $grades[$i]=2;
     $tg =$grades[$i] * $units[$i];
     $gp = $gp + $tg;
     if($grades[$i]===2){
      $grade[]="D";
     }
 }
 elseif($scores[$i] >=0 AND $scores[$i] <=44){
     $grades[$i]=0;
     $tg =$grades[$i] * $units[$i];
     $gp = $gp + $tg;
     if($grades[$i]===0){
      $grade[]="F";
     }
 }
 
}
//print_r($grade);
include(SHARED_PATH . '/grade_insert.php');
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
  
  <span>Grade Point : </span>
  <select name="gp" type="text" class="btn btn-outline-success mt-sm-2" 
  value="<?php h(number_format($mgp, 2)) ; ?>">
  <option><?php echo h(number_format($mgp, 2)) ; ?></option>
  </select></br>
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
<h5><a class="text-danger" href="<?php echo url_for('/admin/upload/stageone.php')?>">
Previous Page</a></h5>
</div>

<div class="container-fluid">
  <div class="row mt-sm-5">
    <div class="col-sm-5 mx-auto">
      <div class="card">
      <div class="card-header">
        <div class="card-subtitle">
           <h4 class="text-success">Input Score And Enter The Corresponding CourseUnit!!</h4>
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
    <input name="score[]" type="number" min="0" max="100" placeholder="score"
    required class="btn btn-outline-success mt-sm-2">
   
    <labe><?php echo"Course Unit:" ;?></label>
    <input name="unit[]" type="number" required min="1" max="40" placeholder="unit"class="btn btn-outline-primary "></br></br>
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


 
