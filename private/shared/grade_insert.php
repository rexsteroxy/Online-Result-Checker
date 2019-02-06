<?php
$matnumber=$_POST['mat_number'];
$array_grade=$grade ?? "";;
$d_grade=[];
$semester=$_POST['semester'] ?? '';
$d_grade[0]=$array_grade[0] ?? "";
$d_grade[1]=$array_grade[1] ?? "";
$d_grade[2]=$array_grade[2] ?? "";
$d_grade[3]=$array_grade[3] ?? "";
$d_grade[4]=$array_grade[4] ?? "";
$d_grade[5]=$array_grade[5] ?? "";
$d_grade[6]=$array_grade[6] ?? "";
$d_grade[7]=$array_grade[7] ?? "";
$d_grade[8]=$array_grade[8] ?? "";
$d_grade[9]=$array_grade[9] ?? "";
$d_grade[10]=$array_grade[10] ?? "";
$d_grade[11]=$array_grade[11] ?? "";
$d_grade[12]=$array_grade[12] ?? "";
$d_grade[13]=$array_grade[13] ?? "";
$d_grade[14]=$array_grade[14] ?? "";
$d_grade[15]=$array_grade[15] ?? "";
$d_grade[16]=$array_grade[16] ?? "";
$d_grade[17]=$array_grade[17] ?? "";
$d_grade[18]=$array_grade[18] ?? "";
$d_grade[19]=$array_grade[19] ?? "";


switch($semester){
case "FirstSemester Year One":
    ResultObject::$table_name="firstsemester";
    ResultObject::edit_grade($d_grade,$matnumber);
    break;
case "SecondSemester Year One": 
    ResultObject::$table_name="secondsemester";
    ResultObject::edit_grade($d_grade,$matnumber);
    break;
case "FirstSemester Year Two":
    ResultObject::$table_name="firstsemester2";
    ResultObject::edit_grade($d_grade,$matnumber);
    break;
case "SecondSemester Year Two":
    ResultObject::$table_name="secondsemester2";
    ResultObject::edit_grade($d_grade,$matnumber);
    break;
case "FirstSemester Year Three":
    ResultObject::$table_name="firstsemester3";
    ResultObject::edit_grade($d_grade,$matnumber);
    break;
case "SecondSemester Year Three":
    ResultObject::$table_name="secondsemester3";
    ResultObject::edit_grade($d_grade,$matnumber);
    break;
case "FirstSemester Year Four":
    ResultObject::$table_name="firstsemester4";
    ResultObject::edit_grade($d_grade,$matnumber);
    break;
case "SecondSemester Year Four":
    ResultObject::$table_name="secondsemester4";
    ResultObject::edit_grade($d_grade,$matnumber);
    break;

}

?>