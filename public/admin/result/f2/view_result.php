<?php
require_once('../../../../private/initialize.php');
require_admin_login();
$page_title = "Firstsemester Year2 Result";
include(SHARED_PATH . "/admin_header.php");
$id = $_GET['id'] ?? 'welcome';

ResultObject::$table_name="firstsemester2";
$student_result = ResultObject::find_by_id($id);

?>
<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-6 col-lg-6 col-sm-6">
        <h5><a class="text-info" href="<?php echo url_for('/admin/result/f2/index.php')?>">
        Back To List</a></h5>
<div id="attributes">
	<table class="table table-striped table-bordered table-hover table-condensed">
        <tr class="text-center">
            <th class="text-info"><?php echo $student_result->matnumber; ?></th>
            <th>FirstSemester Year Two</th>
        </tr>
    </table>
    <?php include(SHARED_PATH . "/student_result.php");?>
</div>
</div>
</div>
</div>


<?php include(SHARED_PATH . "/admin_footer.php");?>
