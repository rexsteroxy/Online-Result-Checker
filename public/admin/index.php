<?php
require_once('../../private/initialize.php');
require_admin_login();
$page_title = "admin_homepage";
include_once(SHARED_PATH .'/admin_header.php');

?>

    
	<hr><hr>
	<div class="container-fluid">
		<div class="row "> 
        	<div class="col-md-4 col-lg-6 col-sm-3">
			<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">Main Menu</h4>
					
						<h4 class="text-success text-center"><a href="upload/index.php" >Upload Results</a></h4>
						<h4 class="text-success text-center"><a href="staff/index.php" >View Administrators</a></h4>
						<h4 class="text-success text-center"><a href="result/index.php" >View Results</a></h4>
						<h4 class="text-success text-center"><a href="student/index.php" >View Students</a></h4>
					
    				
				</div>
		</div>
	</div>
	</div>
			</div>
		</div>
	</div>
	<br><br>

<?php include_once(SHARED_PATH .'/admin_footer.php');?>
