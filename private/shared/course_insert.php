<?php
$matnumber=$_POST['mat_number'];
$array_course=$_POST['course'] ?? "";
$d_courses=[];

$d_courses[0]=$array_course[0] ?? "";
$d_courses[1]=$array_course[1] ?? "";
$d_courses[2]=$array_course[2] ?? "";
$d_courses[3]=$array_course[3] ?? "";
$d_courses[4]=$array_course[4] ?? "";
$d_courses[5]=$array_course[5] ?? "";
$d_courses[6]=$array_course[6] ?? "";
$d_courses[7]=$array_course[7] ?? "";
$d_courses[8]=$array_course[8] ?? "";
$d_courses[9]=$array_course[9] ?? "";
$d_courses[10]=$array_course[10] ?? "";
$d_courses[11]=$array_course[11] ?? "";
$d_courses[12]=$array_course[12] ?? "";
$d_courses[13]=$array_course[13] ?? "";
$d_courses[14]=$array_course[14] ?? "";
$d_courses[15]=$array_course[15] ?? "";
$d_courses[16]=$array_course[16] ?? "";
$d_courses[17]=$array_course[17] ?? "";
$d_courses[18]=$array_course[18] ?? "";
$d_courses[19]=$array_course[19] ?? "";

$courses=[];
$courses['matnumber']=$_POST['mat_number'] ?? '';
$courses['semester']=$_POST['semester'] ?? '';


switch($courses['semester']){
case "FirstSemester Year One":
  //checking to see wether table column matnumber is set
        ResultObject::$table_name="firstsemester";
        $course = ResultObject::find_by_matnumber($matnumber) ?? '';
        if(!isset($course->matnumber)){
            ResultObject::insert_matnumber($courses);
        }
        Resultobject::edit_course($d_courses,$matnumber);
        break;
case "SecondSemester Year One":
  //checking to see wether table column matnumber is set
  ResultObject::$table_name="secondsemester";
        $course = ResultObject::find_by_matnumber($matnumber) ?? '';
        if(!isset($course->matnumber)){
            ResultObject::insert_matnumber($courses);
        }
        Resultobject::edit_course($d_courses,$matnumber);
        break;
case "FirstSemester Year Two":
  //checking to see wether table column matnumber is set
  ResultObject::$table_name="firstsemester2";
  $course = ResultObject::find_by_matnumber($matnumber) ?? '';
  if(!isset($course->matnumber)){
      ResultObject::insert_matnumber($courses);
  }
  Resultobject::edit_course($d_courses,$matnumber);
  break;
case "SecondSemester Year Two":
  //checking to see wether table column matnumber is set
  ResultObject::$table_name="secondsemester2";
         $course = ResultObject::find_by_matnumber($matnumber) ?? '';
        if(!isset($course->matnumber)){
            ResultObject::insert_matnumber($courses);
        }
        Resultobject::edit_course($d_courses,$matnumber);
        break;
case "FirstSemester Year Three":
  //checking to see wether table column matnumber is set
  ResultObject::$table_name="firstsemester3";
  $course = ResultObject::find_by_matnumber($matnumber) ?? '';
  if(!isset($course->matnumber)){
      ResultObject::insert_matnumber($courses);
  }
  Resultobject::edit_course($d_courses,$matnumber);
  break;
case "SecondSemester Year Three":
  //checking to see wether table column matnumber is set
  ResultObject::$table_name="secondsemester3";
  $course = ResultObject::find_by_matnumber($matnumber) ?? '';
  if(!isset($course->matnumber)){
      ResultObject::insert_matnumber($courses);
  }
  Resultobject::edit_course($d_courses,$matnumber);
  break;
case "FirstSemester Year Four":
  //checking to see wether table column matnumber is set
  ResultObject::$table_name="firstsemester4";
  $course = ResultObject::find_by_matnumber($matnumber) ?? '';
  if(!isset($course->matnumber)){
      ResultObject::insert_matnumber($courses);
  }
  Resultobject::edit_course($d_courses,$matnumber);
  break;
case "SecondSemester Year Four":
   //checking to see wether table column matnumber is set
  ResultObject::$table_name="secondsemester4";
  $course = ResultObject::find_by_matnumber($matnumber) ?? '';
  if(!isset($course->matnumber)){
      ResultObject::insert_matnumber($courses);
  }
  Resultobject::edit_course($d_courses,$matnumber);
  break;
}
?>