<?php require_once("../../../private/initialize.php");
require_admin_login();

?>

<?php include(SHARED_PATH . '/admin_header.php');?>



<div class="container-fluid">
  <div class="row mt-sm-5">
    <div class="col-sm-5 mx-auto">
      <div class="card">
      <div class="card-header">
        <div class="card-subtitle">
           <h4 class="text-success">Enter the number of Courses you offer</h4>
        </div>
      </div>
      <div class="card-body">
        <form method="post" class="form-group" action="stagetwo.php">
        
        <span>Enter The Number Of Courses: </span>
        <input type="number" class="form-control mb-sm-3" 
        placeholder="Number of courses" name="number" max="20" min="1" required>

        <button type="submit" name="enter" class="btn btn-outline-success mt-sm-2">Enter</button>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>
<hr>




<?php include(SHARED_PATH . '/admin_footer.php');?>

