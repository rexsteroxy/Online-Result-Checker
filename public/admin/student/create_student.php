<?php
require_once('../../../private/initialize.php');
  
require_admin_login();

$page_title = "Create New Student";
include_once(SHARED_PATH .'/admin_header.php');

if(is_post_request()){
    $args=$_POST['student'] ?? '';
 
$student= new Student($args);
 $result = $student->save();
  if($result === true){
      $new_id = $student->id;
      $session->message('Student was created succesfully');
    redirect_to(url_for('/admin/student/show_student.php?id=' . $new_id));
}
else{
    $errors=$result;
}
}else{
    $student= new Student;
}

?>
<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-7 col-lg-6 col-sm-4">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">Create New Student</h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/student/index.php'); ?>">&laquo; Back to List</a></h5>

    <?php echo display_errors($student->errors);?>

    <form action="<?php echo url_for('/admin/student/create_student.php'); ?>" method="POST">
    <div class="form-group">
                        <input type="text" name="student[name]" required placeholder="Enter Your Name" class="form-control theForm" >  
                    </div>
                    <div class="form-group">
                        <input type="email" name="student[email]" required placeholder="Enter Your Email" class="form-control theForm" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="student[institution]" required placeholder=" Enter Your Institution" class="form-control theForm" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="student[department]" required placeholder="Enter Your Department" class="form-control theForm">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="student[matnumber]" required placeholder="Enter Your Matriculation Number" class="form-control theForm">
                    </div>
                    <label class="text-info">Select Admission Year</label>
                      <select name="student[year]" type="text" class="btn btn-outline-success mt-sm-2">
                      <?php $this_year = idate('Y'); 
                      for($year=$this_year-10; $year<=$this_year; $year++){?>
                        <option><?php echo $year ;?></option>
                     <?php } ?>
                    <div class="form-group">
                        <input type="password"  name="student[pass]" required 
                        placeholder="Enter Your Password" class="form-control theForm">
                    </div>
                    <div class="form-group">
                        <input type="password"  name="student[confirm_password]" required placeholder="Confirm Password" class="form-control theForm">
                    </div>
                    <div class="btn text-center">
                            <button type="submit"  class="btn btn-primary">Submit</button>
                           
                    </div>
                </form>

  </div>	</div>	</div>	</div>	</div>	</div>	</div>
  </br></br>

<?php include_once(SHARED_PATH .'/admin_footer.php') ;?>
 
