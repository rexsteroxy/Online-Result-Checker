<?php
require_once('../../../../private/initialize.php');
require_admin_login();

ResultObject::$table_name="secondsemester4";
$current_page = $_GET['page'] ?? 1;
$per_page = 2;
$total_count= ResultObject::count_all();

//using pagination instead
$pagination = new Pagination($current_page, $per_page, $total_count);
//$s4rs = ResultObject::find_all();


$sql  = "SELECT * FROM  secondsemester4 ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";
$s4rs = ResultObject::find_by_sql($sql);

$page_title = "secondsemester Year4 Result";
include_once(SHARED_PATH .'/admin_header.php');

?>

	<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-12 col-lg-12 col-sm-12">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">YEAR ONE SECOND SEMESTER RESULT</h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/result/index.php')?>">
			Back To List</a></h5>
						<div id="attributes">



<table class="table table-striped table-bordered table-hover table-condensed text-center">
	<tr>
        <th>id</th>
        <th>matnumber</th>
        <th>Reupload</th>
  	    <th>View</th>
        
		
        
	</tr>

	<?php foreach($s4rs as $s4r) {?>
		<tr class="text-info">
			<td><?php  echo h($s4r->id) ;?></td>
			<td><?php echo h($s4r->matnumber);?></td>
            <td><a class="action" href="<?php echo url_for('/admin/upload/stageone.php') ;?>">click to reupload</a></td>
			<td><a class="action" href="<?php echo url_for('/admin/result/s4/view_result.php?id=' . $s4r->id) ;?>">click to view</a></td>
			
			
		</tr>
        <?php }?>
		<?php 
    	$url=url_for('/admin/result/s4/index.php');
       echo $pagination->page_links($url);
    		?>
	</table>
	</div>	</div>	</div>	</div>	</div>	</div>	</div>

</div>
</div>

<br><br>



<?php include_once(SHARED_PATH .'/admin_footer.php');?>