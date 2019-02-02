<?php
require_once('../../../private/initialize.php');
require_admin_login();
$page_title = "show student";
include(SHARED_PATH . "/admin_header.php");
$current_page = $_GET['page'] ?? 1;
$per_page = 5;
$total_count= Student::count_all();

//using pagination instead
$pagination = new Pagination($current_page, $per_page, $total_count);
//$students= Student::find_all();


$sql  = "SELECT * FROM student ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";
$students= Student::find_by_sql($sql);
?>
<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-12 col-lg-12 col-sm-12">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">RECORD OF ALL REGISTERED STUDENTS</h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/index.php')?>">GO TO THE MAIN MENU</a></h5>
	<div id="attributes">
	<table class="table table-striped table-bordered table-hover table-condensed text-center">
		<tr>
			<th>Student Management Dashboard</th>
		</tr>
		<tr>
	<td><a class="action" href="<?php echo url_for('/admin/student/create_student.php');?>">Create New Student</a></td>
	</tr>
    <table class="table table-striped table-bordered table-hover table-condensed">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Matnumber</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
		<th>&nbsp;</th>
      </tr>
      
      <?php
      
      foreach($students as $student){ ?>
      <tr>
        <td> <?php echo $student->id; ?></td>
        <td> <?php echo $student->name; ?></td>
        <td> <?php echo $student->matnumber; ?></td>
		<td><a class="action" href="<?php echo url_for('/admin/student/show_student.php?id=' . $student->id) ;?>">CLICK TO VIEW</a></td>
		<td><a class="action" href="<?php echo url_for('/admin/student/edit_student.php?id=' . $student->id) ;?>">CLICK TO EDIT</a></td>
		<td><a class="action" href="<?php echo url_for('/admin/student/delete_student.php?id=' . h(u($student->id)));?>">CLICK TO DELETE</a></td>
        </tr>
     <?php }?>
     <?php 
       $url=url_for('/admin/student/index.php');
       echo $pagination->page_links($url);
    ?>
    </table>
    

      
    </div>

  </div>	</div>	</div>	</div>	</div>	</div>	</div>
<br><br>


<?php include(SHARED_PATH . "/admin_footer.php");?>
