<?php
$matnumber=$_POST['mat_number'];
$details=[];
//$details['matnumber']=$_POST['mat_number'] ?? '';
$details['semester']=$_POST['semester'] ?? '';
$details['gp']=$_POST['gp'] ?? '';

ResultObject::$table_name="detail";
$detail = ResultObject::find_by_matnumber($matnumber) ?? '';
        if(!isset($detail->matnumber)){
            // ResultObject::insert_matnumber($matnumber);
            echo "helloworld";
        }

switch($details['semester']){
case "FirstSemester Year One":
    ResultObject::$detail_column="firstone";
    ResultObject::edit_gp($details,$matnumber);
    header('location:' . 'stageone.php');
    break;
case "SecondSemester Year One":
    ResultObject::$detail_column="secondone";
    ResultObject::edit_gp($details,$matnumber);
    header('location:' . 'stageone.php');
    break;
case "FirstSemester Year Two":
    ResultObject::$detail_column="firsttwo";
    ResultObject::edit_gp($details,$matnumber);
    header('location:' . 'stageone.php');
    break;
case "SecondSemester Year Two":
    ResultObject::$detail_column="secondtwo";
    ResultObject::edit_gp($details,$matnumber);
    header('location:' . 'stageone.php');
    break;
case "FirstSemester Year Three":
    ResultObject::$detail_column="firstthree";
    ResultObject::edit_gp($details,$matnumber);
    header('location:' . 'stageone.php');
    break;
case "SecondSemester Year Three":
    ResultObject::$detail_column="secondthree";
    ResultObject::edit_gp($details,$matnumber);
    header('location:' . 'stageone.php');
    break;
case "FirstSemester Year Four":
    ResultObject::$detail_column="firstfour";
    ResultObject::edit_gp($details,$matnumber);
    header('location:' . 'stageone.php');
    break;
case "SecondSemester Year Four":
    ResultObject::$detail_column="secondfour";
    ResultObject::edit_gp($details,$matnumber);
    header('location:' . 'stageone.php');
    break;
// case "FirstSemester Year Five":ResultObject::edit_gp($details,$matnumber);header('location:' . 'stageone.php');break;
// case "SecondSemester Year Five":ResultObject::edit_gp($details,$matnumber);header('location:' . 'stageone.php');break;
defualt:
header('location:' . 'stageone.php');
}
?>