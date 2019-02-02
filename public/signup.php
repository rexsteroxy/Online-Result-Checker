<?php
require_once("../private/initialize.php");

$page_title = "Registration Page";
include_once(SHARED_PATH .'/admin_header.php');

if(is_post_request()){
    $args=$_POST['student'] ?? '';

$student= new Student($args);
 $result = $student->save();
  if($result === true){
      $new_id = $student->id;
    $_SESSION['message']="Registeration Successful";
    redirect_to(url_for('/login.php'));
}
else{
    $errors=$result;
}
}else{
    $student= new Student;
}

?>




<body>
   <!--<img src="img/flathouse.jpg" class="signupContent" alt=""> -->
    <div class="container">
    <div class="row "> 
        <div class="col-md-6 col-lg-6 col-sm-6">
            <h4 class="text-black">Already Registered?</h4><h4><a href="login.php">Click Here</a></h4>
            <p>Your registeration will enable us keep track of your GP,
            So that once your come to perform another calculation for another semester
                ,you will be able to see your previous GP calculations</p>
            <h6><a class="text-success"> I WISH YOU A HIGHER GP.</a></h6>
            <?php  echo display_errors($student->errors);?>
        </div>
        <div class="col-md-3 col-lg-4 col-sm-6">
            <div class="card">
            <div class="card-header">
            <div class="card-subtitle">
                <h4 class="text-success">Registeration form</h4>
                <form action="signup.php" method="POST">
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
                    <label class="text-info">Select Admission Year</label>
                      <select name="student[year]" type="text" class="btn btn-outline-success mt-sm-2">
                      <?php $this_year = idate('Y'); 
                      for($year=$this_year-10; $year<=$this_year; $year++){?>
                        <option><?php echo $year ;?></option>
                     <?php } ?>
                    <div class="form-group">
                        <input type="text"  name="student[matnumber]" required placeholder="Enter Your Matriculation Number" class="form-control theForm">
                    </div>
                    <div class="form-group">
                        <input type="password"  name="student[pass]" required placeholder="Enter Your Password" class="form-control theForm">
                    </div>
                    <div class="form-group">
                        <input type="password"  name="student[confirm_password]" required placeholder="Confirm Password" class="form-control theForm">
                    </div>
                    <div class="btn text-center">
                            <button type="submit"  class="btn btn-primary">Submit</button>
                           
                    </div>
                </form>
            </div>
            </div>
            </div>

        </div>
    
    </div>
    </div>
    <hr>
	
    
        

<?php include(SHARED_PATH . '/include_footer.php');?>