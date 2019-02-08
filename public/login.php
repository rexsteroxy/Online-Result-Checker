<?php 
require_once("../private/initialize.php");
$matnumber = '';
$password ='';
$errors=[];
if(is_post_request()) {

  $matnumber = $_POST['matnumber'] ?? '';
  $password = $_POST['password'] ?? '';

  // Validations
  if(is_blank($matnumber)) {
    $errors[] = "Matnumber cannot be blank.";
  }
  if(is_blank($password)) {
    $errors[] = "Password cannot be blank.";
  }
  if(empty($errors)){
    $student = Student::find_by_matnumber($matnumber);
      if($student != false && $student->verify_password($password)){
          $session->student_login($student);
              redirect_to(url_for('/profile.php'));
          }else{
            //email found but password does not match
            $errors[] = "log in not successful";
            
          }
      }
      
  }


 
?>
<?php $page_title = ' Student Log in'; ?>
<?php include(SHARED_PATH . '/include_header.php'); ?>

<div class="container">
    <div class="row "> 
    <div class="col-md-6 col-lg-6 col-sm-6">
	        <h4 class="text-black">Not Registered?</h4><h4><a href="signup.php">Click Here</a></h4>
            <?php  echo display_errors($errors);?>
        </div>
        <div class="col-md-3 col-lg-4 col-sm-6">
            <div class="card">
            <div class="card-header">
            <div class="card-subtitle">
                <h4 class="text-success">Login form</h4>
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="matnumber" placeholder="Enter Your Matnumber" required class="form-control theForm" >  
                    </div>
                    <div class="form-group">
                        <input type="password"  name="password"  required placeholder="Enter Your Password" class="form-control theForm">
                    </div>
                    <div class="btn text-center">
                            <button type="submit"  name="login" class="btn btn-primary">Submit</button>
                           
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