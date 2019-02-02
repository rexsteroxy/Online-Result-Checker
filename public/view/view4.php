<?php require_once("../../private/initialize.php");?>
<?php 
require_student_login();

$matnumber=$session->matnumber;
ResultObject::$table_name="secondsemester2";
$student_result=ResultObject::find_by_matnumber($matnumber);


?>
<?php include(SHARED_PATH . '/include_header.php');?>
<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-6 col-lg-6 col-sm-6">
<div id="attributes">
	<table class="table table-striped table-bordered table-hover table-condensed">
        <tr class="text-center">
            <th>SecondSemester Year Two</th>
        </tr>
    </table>
    <?php include(SHARED_PATH . '/student_result.php');?>
</div>
</div>
</div>
</div>
        

<?php include(SHARED_PATH . '/include_footer.php');?>