<?php
$matnumber=$_POST['mat_number'];
$array_unit=$_POST['unit'] ?? "";;
$d_unit=[];
$semester=$_POST['semester'] ?? '';
$d_unit[0]=$array_unit[0] ?? "";
$d_unit[1]=$array_unit[1] ?? "";
$d_unit[2]=$array_unit[2] ?? "";
$d_unit[3]=$array_unit[3] ?? "";
$d_unit[4]=$array_unit[4] ?? "";
$d_unit[5]=$array_unit[5] ?? "";
$d_unit[6]=$array_unit[6] ?? "";
$d_unit[7]=$array_unit[7] ?? "";
$d_unit[8]=$array_unit[8] ?? "";
$d_unit[9]=$array_unit[9] ?? "";
$d_unit[10]=$array_unit[10] ?? "";
$d_unit[11]=$array_unit[11] ?? "";
$d_unit[12]=$array_unit[12] ?? "";
$d_unit[13]=$array_unit[13] ?? "";
$d_unit[14]=$array_unit[14] ?? "";
$d_unit[15]=$array_unit[15] ?? "";
$d_unit[16]=$array_unit[16] ?? "";
$d_unit[17]=$array_unit[17] ?? "";
$d_unit[18]=$array_unit[18] ?? "";
$d_unit[19]=$array_unit[19] ?? "";


switch($semester){
case "FirstSemester Year One":
    ResultObject::$table_name="firstsemester";
    ResultObject::edit_unit($d_unit,$matnumber);
    break;
case "SecondSemester Year One": 
    ResultObject::$table_name="secondsemester";
    ResultObject::edit_unit($d_unit,$matnumber);
    break;
case "FirstSemester Year Two":
    ResultObject::$table_name="firstsemester2";
    ResultObject::edit_unit($d_unit,$matnumber);
    break;
case "SecondSemester Year Two":
    ResultObject::$table_name="secondsemester2";
    ResultObject::edit_unit($d_unit,$matnumber);
    break;
case "FirstSemester Year Three":
    ResultObject::$table_name="firstsemester3";
    ResultObject::edit_unit($d_unit,$matnumber);
    break;
case "SecondSemester Year Three":
    ResultObject::$table_name="secondsemester3";
    ResultObject::edit_unit($d_unit,$matnumber);
    break;
case "FirstSemester Year Four":
    ResultObject::$table_name="firstsemester4";
    ResultObject::edit_unit($d_unit,$matnumber);
    break;
case "SecondSemester Year Four":
    ResultObject::$table_name="secondsemester4";
    ResultObject::edit_unit($d_unit,$matnumber);
    break;

}

?>