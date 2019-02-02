<?php
require_once('../../../private/initialize.php');
require_admin_login();
 if(!isset($_GET['id'])){
  redirect_to(url_for('/admin/student/index.php'));
}
 
$id = $_GET['id'];
$student = Student::find_by_id($id);
if($student == false){
    redirect_to(url_for('/admin/student/index.php'));
}

if(is_post_request()){
$args= $_POST['student'] ?? NULL;
$student->merge_attributes($args);
$result=$student->save();
    if($result == true ){
        $session->message('Student was edited succesfully');
        redirect_to(url_for('/admin/student/show_student.php?id='. $id));
    }else{
 
    }

}
 else{

}


?>

<?php $page_title = 'edit ' . $student->name; ?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>

<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-7 col-lg-6 col-sm-3">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">EDIT ADMINSTRATORS</h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/staff/index.php')?>">&laquo; Back to List</a></h5>

    <?php echo display_errors($student->errors);?>

    <form action="<?php echo url_for('/admin/student/edit_student.php?id=' . h(u($id)));?>"  method="POST">
                   
                  <div class="form-group">    
                    <input type="text" name="student[name]" required value="<?php echo h($student->name); ?>" class="form-control theForm" >  
                    </div>
                    <div class="form-group">
                        <input type="email" name="student[email]" value="<?php  echo h($student->email); ?>" required  class="form-control theForm" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="student[institution]" value="<?php echo h($student->institution); ?>" required class="form-control theForm" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="student[department]"  value="<?php echo h($student->department); ?>"required  class="form-control theForm">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="student[matnumber]" value="<?php echo h($student->matnumber); ?>" required  class="form-control theForm">
                    </div>
                    <label class="text-info">Select Admission Year</label>
                      <select name="student[year]" type="text" class="btn btn-outline-success mt-sm-2">
                      <?php $this_year = idate('Y'); 
                      for($year=$this_year-20; $year<=$this_year; $year++){?>
                        <option value="<?php echo $year; ?>" 
                        <?php if($student->year == $year)
                        {echo 'selected';}?>><?php echo $year; ?></option>
                     <?php } ?>
                    <div class="form-group">
                        <input type="password"  name="student[pass]"    
                        class="form-control theForm" placeholder="Enter Your Password">
                    </div>
                    <div class="form-group">
                        <input type="password"  name="student[confirm_password]" 
                           class="form-control theForm" placeholder="Enter Confirm Password">
                    </div>
     
                 </div>
                    <div class="btn text-center">
                            <button type="submit"   class="btn btn-primary">Submit</button>      
                    </div>
    </form>

  </div>	</div>	</div>	</div>	</div>	</div>	</div>
<br><br>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
