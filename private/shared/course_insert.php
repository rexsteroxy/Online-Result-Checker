<?php
$matnumber=$_POST['mat_number'];
//var_dump($matnumber);
$args=$_POST['course'] ?? NULL;
//var_dump($args);
$courses=[];
$courses['matnumber']=$_POST['mat_number'] ?? '';
$courses['semester']=$_POST['semester'] ?? '';


switch($courses['semester']){
case "FirstSemester Year One":
  //checking to see wether table column matnumber is set
  ResultObject::$table_name="firstsemester";
  $course = ResultObject::find_by_matnumber($matnumber);
  //var_dump($course->matnumber);
  if(empty($course->matnumber)){
    $table=new ResultObject($courses);
    $table->save();
  }
  //var_dump($course);
  //var_dump($args);
  $course->merge_attributes($args);
  $course->update();
  break;
case "SecondSemester Year One":
  //checking to see wether table column matnumber is set
  ResultObject::$table_name="secondsemester";
  $dt_courses= new ResultObject($courses);
  if(!isset($dt_courses->matnumber)){
  $dt_courses->save();
  }
  $course = ResultObject::find_by_matnumber($matnumber);
  $course->merge_attributes($args);
  $course->save();
  break;
case "FirstSemester Year Two":
  //checking to see wether table column matnumber is set
  ResultObject::$table_name="firstsemester2";
  $dt_courses= new ResultObject($courses);
  if(!isset($dt_courses->matnumber)){
  $dt_courses->save();
  }
  $course = ResultObject::find_by_matnumber($matnumber);
  $course->merge_attributes($args);
  $course->save();
  break;
case "SecondSemester Year Two":
  //checking to see wether table column matnumber is set
  ResultObject::$table_name="secondsemester2";
  $dt_courses= new ResultObject($courses);
  if(!isset($dt_courses->matnumber)){
  $dt_courses->save();
  }
  $course = ResultObject::find_by_matnumber($matnumber);
  $course->merge_attributes($args);
  $course->save();
  break;
case "FirstSemester Year Three":
  //checking to see wether table column matnumber is set
  ResultObject::$table_name="firstsemester3";
  $dt_courses= new ResultObject($courses);
  if(!isset($dt_courses->matnumber)){
  $dt_courses->save();
  }
  $course = ResultObject::find_by_matnumber($matnumber);
  $course->merge_attributes($args);
  $course->save();
  break;
case "SecondSemester Year Three":
  //checking to see wether table column matnumber is set
  ResultObject::$table_name="secondsemester3";
  $dt_courses= new ResultObject($courses);
  if(!isset($dt_courses->matnumber)){
  $dt_courses->save();
  }
  $course = ResultObject::find_by_matnumber($matnumber);
  $course->merge_attributes($args);
  $course->save();
  break;
case "FirstSemester Year Four":
  //checking to see wether table column matnumber is set
  ResultObject::$table_name="firstsemester4";
  $dt_courses= new ResultObject($courses);
  if(!isset($dt_courses->matnumber)){
  $dt_courses->save();
  }
  $course = ResultObject::find_by_matnumber($matnumber);
  $course->merge_attributes($args);
  $course->save();
  break;
case "SecondSemester Year Four":
   //checking to see wether table column matnumber is set
  ResultObject::$table_name="secondsemester4";
  $dt_courses= new ResultObject($courses);
  if(!isset($dt_courses->matnumber)){
  $dt_courses->save();
  }
  $course = ResultObject::find_by_matnumber($matnumber);
  $course->merge_attributes($args);
  $course->save();
  break;
}
?>