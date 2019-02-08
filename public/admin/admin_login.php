<?php
require_once('../../private/initialize.php');
 
$email = '';
$password ='';
$errors=[];
if(is_post_request()) {

  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

  // Validations
  if(is_blank($email)) {
    $errors[] = "Email cannot be blank.";
  }
  if(is_blank($password)) {
    $errors[] = "Password cannot be blank.";
  }
  if(empty($errors)){
    $admin = Admin::find_by_email($email);
      if($admin != false && $admin->verify_password($password)){
          $session->admin_login($admin);
              redirect_to(url_for('/admin/index.php'));
          }else{
            //email found but password does not match
            $errors[] = "log in not successful";
            
          }
      }
      
  }


 
?>
<?php $page_title = 'Log in'; ?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>

<div class="container">
    <div class="row "> 
        <div class="col-md-6 col-lg-6 col-sm-6">
	        <h4 class="text-black">Not an Admin?</h4><h4><a href="<?php echo url_for('/login.php') ?>"  class="text-danger">
            Click Here To Leave This Page!!</a></h4>
            <?php  echo display_errors($errors);?>
        </div>
        <div class="col-md-3 col-lg-4 col-sm-6">
            <div class="card">
            <div class="card-header">
            <div class="card-subtitle">
                <h4 class="text-success">Login form</h4>
                <form action="admin_login.php" method="POST">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Enter Your email" required class="form-control theForm" >  
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

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
