<?php
require_once('../../../../private/initialize.php');
require_admin_login();

$ffirstsemester = find_all_firstsemester();

$page_title = "View Result";
include_once(SHARED_PATH .'/admin_header.php');

?>

	<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-12 col-lg-12 col-sm-12">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">YEAR ONE FIRST SEMESTER RESULT</h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/index.php')?>">GO TO THE MAIN MENU</a></h5>
						<div id="attributes">



<table class="table table-striped table-bordered table-hover table-condensed text-center">
	<tr>
        <th>id</th>
        <th>matnumber</th>
        <th>Reupload</th>
  	    <th>View</th>
        <th>Delete</th>
		<th>Course1</th>  
		<th>Grade1</th>
		<th>Course2</th>
		<th>Grade2</th>
        <th>Course3</th>
		<th>Grade3</th>
        <th>Course4</th>
		<th>Grade4</th>
        <th>Course5</th>
		<th>Grade5</th>
        <th>Course6</th>  
		<th>Grade6</th>
		<th>Course7</th>
		<th>Grade7</th>
        <th>Course8</th>
		<th>Grade8</th>
        <th>Course9</th>
		<th>Grade9</th>
        <th>Course10</th>
		<th>Grade10</th>
        <th>Course11</th>  
		<th>Grade11</th>
		<th>Course12</th>
		<th>Grade12</th>
        <th>Course13</th>
		<th>Grade13</th>
        <th>Course14</th>
		<th>Grade14</th>
        <th>Course15</th>
		<th>Grade15</th>
        <th>Course16</th>  
		<th>Grade16</th>
		<th>Course17</th>
		<th>Grade17</th>
        <th>Course18</th>
		<th>Grade18</th>
        <th>Course19</th>
		<th>Grade19</th>
        <th>Course20</th>
		<th>Grade20</th>
        
	</tr>

	<?php while($firstsemester = mysqli_fetch_assoc($ffirstsemester)) {?>
		<tr class="text-info">
			<td><?php  echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['matnumber']);?></td>
            <td><a class="action" href="<?php echo url_for('/admin/result/f1/reupload_result.php?id=' . $firstsemester['id']) ;?>">click to reupload</a></td>
			<td><a class="action" href="<?php echo url_for('/admin/result/f1/view_result.php?id=' . $firstsemester['id']) ;?>">click to view</a></td>
			<td><a class="action" href="<?php echo url_for('/admin/result/f1/delete_result.php?id=' . h(u($firstsemester['id'])));?>">click to delete</a></td>
			<td><?php echo ($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
            <td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
            <td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
            <td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
            <td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo h($firstsemester['id']);?></td>
			<td><?php echo  "helloworld";?></td>
            <td><?php echo  "helloworld";?></td>
			<td><?php echo  "helloworld";?></td>
            <td><?php echo "helloworld";?></td>
			<td><?php echo  "helloworld";?></td>
			<td><?php echo  "helloworld";?></td>
			<td><?php echo  "helloworld";?></td>
			<td><?php echo  "helloworld";?></td>
			<td><?php echo  "helloworld";?></td>
			<td><?php echo  "helloworld";?></td>
			<td><?php echo  "helloworld";?></td>
            <td><?php echo  "helloworld";?></td>
			<td><?php echo  "helloworld";?></td>
            <td><?php echo  "helloworld";?></td>
			<td><?php echo  "helloworld";?></td>
		</tr>
        <?php }?>
	</table>
	</div>	</div>	</div>	</div>	</div>	</div>	</div>

</div>
</div>

<br><br>



<?php include_once(SHARED_PATH .'/admin_footer.php');?>