<?php
$matnumber=$_POST['mat_number'];
$array_score=$_POST['score'] ?? "";;
$d_score=[];
$semester=$_POST['semester'] ?? '';
$d_score[0]=$array_score[0] ?? "";
$d_score[1]=$array_score[1] ?? "";
$d_score[2]=$array_score[2] ?? "";
$d_score[3]=$array_score[3] ?? "";
$d_score[4]=$array_score[4] ?? "";
$d_score[5]=$array_score[5] ?? "";
$d_score[6]=$array_score[6] ?? "";
$d_score[7]=$array_score[7] ?? "";
$d_score[8]=$array_score[8] ?? "";
$d_score[9]=$array_score[9] ?? "";
$d_score[10]=$array_score[10] ?? "";
$d_score[11]=$array_score[11] ?? "";
$d_score[12]=$array_score[12] ?? "";
$d_score[13]=$array_score[13] ?? "";
$d_score[14]=$array_score[14] ?? "";
$d_score[15]=$array_score[15] ?? "";
$d_score[16]=$array_score[16] ?? "";
$d_score[17]=$array_score[17] ?? "";
$d_score[18]=$array_score[18] ?? "";
$d_score[19]=$array_score[19] ?? "";


switch($semester){
case "FirstSemester Year One":
    ResultObject::$table_name="firstsemester";
    ResultObject::edit_score($d_score,$matnumber);
    break;
case "SecondSemester Year One": 
    ResultObject::$table_name="secondsemester";
    ResultObject::edit_score($d_score,$matnumber);
    break;
case "FirstSemester Year Two":
    ResultObject::$table_name="firstsemester2";
    ResultObject::edit_score($d_score,$matnumber);
    break;
case "SecondSemester Year Two":
    ResultObject::$table_name="secondsemester2";
    ResultObject::edit_score($d_score,$matnumber);
    break;
case "FirstSemester Year Three":
    ResultObject::$table_name="firstsemester3";
    ResultObject::edit_score($d_score,$matnumber);
    break;
case "SecondSemester Year Three":
    ResultObject::$table_name="secondsemester3";
    ResultObject::edit_score($d_score,$matnumber);
    break;
case "FirstSemester Year Four":
    ResultObject::$table_name="firstsemester4";
    ResultObject::edit_score($d_score,$matnumber);
    break;
case "SecondSemester Year Four":
    ResultObject::$table_name="secondsemester4";
    ResultObject::edit_score($d_score,$matnumber);
    break;

}

?>