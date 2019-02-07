<?php 
 $matnumber=$_POST['mat_number'];
 

$courses=[];
$courses['matnumber']=$_POST['mat_number'] ?? '';
$courses['semester']=$_POST['semester'] ?? '';
$courses['gp']=$_POST['gp'] ?? '';


        $course = GpObject::find_by_matnumber($matnumber) ?? '';
        if(!isset($course->matnumber)){
            GpObject::insert_matnumber($courses);
        }
switch($courses['semester']){
case "FirstSemester Year One":
                GpObject::$table_name;
                GpObject::$detail_column="firstone='";
                GpObject::edit_gp($courses,$matnumber);
                header('location:' . 'stageone.php');
                break;
case "SecondSemester Year One":
    GpObject::$table_name;
    GpObject::$detail_column="secondone='";
    GpObject::edit_gp($courses,$matnumber);
    header('location:' . 'stageone.php');
    break;
case "FirstSemester Year Two":
    GpObject::$table_name;
    GpObject::$detail_column="firsttwo='";
    GpObject::edit_gp($courses,$matnumber);
    header('location:' . 'stageone.php');
    break;
case "SecondSemester Year Two":
    GpObject::$table_name;
    GpObject::$detail_column="secondtwo='";
    GpObject::edit_gp($courses,$matnumber);
    header('location:' . 'stageone.php');
    break;
case "FirstSemester Year Three":
    GpObject::$table_name;
    GpObject::$detail_column="firstthree='";
    GpObject::edit_gp($courses,$matnumber);
    header('location:' . 'stageone.php');
    break;
case "SecondSemester Year Three":
    GpObject::$table_name;
    GpObject::$detail_column="secondthree='";
    GpObject::edit_gp($courses,$matnumber);
    header('location:' . 'stageone.php');
    break;
case "FirstSemester Year Four":
    GpObject::$table_name;
    GpObject::$detail_column="firstfour='";
    GpObject::edit_gp($courses,$matnumber);
    header('location:' . 'stageone.php');
    break;
case "SecondSemester Year Four":
    GpObject::$table_name;
    GpObject::$detail_column="secondfour='";
    GpObject::edit_gp($courses,$matnumber);
    header('location:' . 'stageone.php');
    break;
case "FirstSemester Year Five":
                GpObject::$table_name;  
                GpObject::$detail_column="firstfive='";
                GpObject::edit_gp($courses,$matnumber);
                header('location:' . 'stageone.php');
                break;
case "SecondSemester Year Five":
                GpObject::$table_name;
                GpObject::$detail_column="secondfive='";
                GpObject::edit_gp($courses,$matnumber);
                header('location:' . 'stageone.php');
                break;
defualt:
header('location:' . 'stageone.php');
    }
?>