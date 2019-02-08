<?php
require_once('../../../private/initialize.php');
require_admin_login();
$page_title = "View Result";
include_once(SHARED_PATH .'/admin_header.php');

?>

	<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-12 col-lg-12 col-sm-12">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">RECORD OF ALL SEMESTER RESULTS</h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/index.php')?>">GO TO THE MAIN MENU</a></h5>
						<div id="attributes">



<table class="table table-striped table-bordered table-hover table-condensed text-center">
	<tr>
		<th>First Semester Year One </th>
		<th>Second Semester Year one</th>
		<th>First Semester Year Two</th>
		<th>Second Semester Year Two</th>
		<th>First Semester Year Three</th>
		<th>Second Semester Year Three</th>
  	    <th>First Semester Year Four</th>
        <th>Second Semester Year Four</th>
        
	</tr>

	
		<tr class="text-info">
			<td><a href="<?php echo url_for('/admin/result/f1/index.php') ;?>">CLICK TO VIEW</a></td>
			<td><a href="<?php echo url_for('/admin/result/s1/index.php') ;?>">CLICK TO VIEW</a></td>
			<td><a href="<?php echo url_for('/admin/result/f2/index.php') ;?>">CLICK TO VIEW</a></td>
			<td><a href="<?php echo url_for('/admin/result/s2/index.php') ;?>">CLICK TO VIEW</a></td>
			<td><a href="<?php echo url_for('/admin/result/f3/index.php') ;?>">CLICK TO VIEW</a></td>
			<td><a href="<?php echo url_for('/admin/result/s3/index.php') ;?>">CLICK TO VIEW</a></td>
			<td><a href="<?php echo url_for('/admin/result/f4/index.php') ;?>">CLICK TO VIEW</a></td>
			<td><a href="<?php echo url_for('/admin/result/s4/index.php') ;?>">CLICK TO VIEW</a></td>
		</tr>
		
	</table>
	<table class="table table-striped table-bordered table-hover table-condensed text-center">
	<tr>
			<th>Students GP Results</th>
		</tr>
		<tr>
			<td><a href="<?php echo url_for('/admin/result/gp/index.php') ;?>">CLICK TO VIEW</td></a>
		</tr>
	</table>
	</div>	</div>	</div>	</div>	</div>	</div>	</div>

</div>
</div>

<br><br>



<?php include_once(SHARED_PATH .'/admin_footer.php');?>