<?php
require_once('../../../../private/initialize.php');
require_admin_login();


//$gprs = GpObject::find_all();
$current_page = $_GET['page'] ?? 1;
$per_page = 5;
$total_count= GpObject::count_all();

//using pagination instead
$pagination = new Pagination($current_page, $per_page, $total_count);
//$f1rs = ResultObject::find_all();


$sql  = "SELECT * FROM  detail ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";
$gprs = GpObject::find_by_sql($sql);
$page_title = "Grade Point Result";
include_once(SHARED_PATH .'/admin_header.php');

?>

	<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-12 col-lg-12 col-sm-12">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">STUDENTS GRADE POINT RESULTS</h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/index.php')?>">GO TO THE MAIN MENU</a></h5>
						<div id="attributes">



<table class="table table-striped table-bordered table-hover table-condensed text-center">
	<tr>
        <th>id</th>
        <th>matnumber</th>
        <th>Reupload</th>
  	    <th>View</th>
        
		
        
	</tr>

	<?php foreach($gprs as $gpr) {?>
		<tr class="text-info">
			<td><?php  echo h($gpr->id);?></td>
			<td><?php echo h($gpr->matnumber);?></td>
            <td><a class="action" href="<?php echo url_for('/admin/upload/stageone.php') ;?>">click to reupload</a></td>
			<td><a class="action" href="<?php echo url_for('/admin/result/gp/view_result.php?id=' . $gpr->id) ;?>">click to view</a></td>
			
			
		</tr>
        <?php }?>
		<?php 
    	$url=url_for('/admin/result/gp/index.php');
       	echo $pagination->page_links($url);
    ?>
	</table>
	</div>	</div>	</div>	</div>	</div>	</div>	</div>

</div>
</div>

<br><br>



<?php include_once(SHARED_PATH .'/admin_footer.php');?>