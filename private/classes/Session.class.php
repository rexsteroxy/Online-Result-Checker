<?php 
class Session{
//for the admin session
    private $admin_id;
    public $admin_name;
    public $admin_last_login;
    public $level;
    public const ADMIN_MAX_TIME = 60*60*24;
//properties for students session
    public $student_id;
    public $student_name;
    public $student_last_login;
    public $matnumber;
    public const STUDENT_MAX_TIME =60*60*24;

public function __construct(){
        session_start(); //turn the session start
        $this->check_stored_admin_login();
        $this->check_stored_student_login();
    }
public function admin_login($admin){
    //prevents session fixation attacks
    session_regenerate_id();
    if($admin){
        $_SESSION['admin_id']= $admin->id;
        $this->admin_id = $admin->id;
        $this->admin_name = $_SESSION['admin_name']= $admin->name;
        $this->admin_last_login = $_SESSION['admin_last_login'] = time();
        $this->admin_level = $_SESSION['admin_level']= $admin->level;
    }
    return true;
}
public function is_admin_logged_in(){
    //return isset($this->admin_id);
     return isset($this->admin_id) && $this->admin_login_duration_time();
}
public function admin_logout(){
    unset($_SESSION['admin_id']);
    unset($_SESSION['admin_name']);
    unset($_SESSION['admin_last_login']);
    unset($_SESSION['admin_level']);
    //unset($_SESSION['login_duration']);
    unset($this->admin_id);
    unset($this->admin_name);
    unset($this->admin_last_login);
    unset($this->admin_level);
    //unset($this->login_duration);
    return true;
}
private function check_stored_admin_login(){
    if(isset($_SESSION['admin_id'])){
    $this->admin_id = $_SESSION['admin_id'];
    $this->admin_name = $_SESSION['admin_name'];
    $this->admin_last_login = $_SESSION['admin_last_login'];
    $this->admin_level = $_SESSION['admin_level'];
    //$this->login_duration = $_SESSION['login_duration'];
}
}
private function admin_login_duration_time(){
    if(!isset($this->admin_last_login)){
        return false;
    }elseif(($this->admin_last_login + self::ADMIN_MAX_TIME) < time()){
        return false;
    }else{
        return true;
    }
} 

//for student session methods
public function student_login($student){
    //prevents session fixation attacks
    session_regenerate_id();
    if($student){
        $_SESSION['student_id']= $student->id;
        $this->student_id = $student->id;
        $this->student_name = $_SESSION['student_name']= $student->name;
        $this->student_last_login = $_SESSION['student_last_login'] = time();
        $this->matnumber = $_SESSION['matnumber']= $student->matnumber;
        
    }
    return true;
}
public function is_student_logged_in(){
    //return isset($this->student_id);
     return isset($this->student_id) && $this->student_login_duration_time();
}
public function student_logout(){
    unset($_SESSION['student_id']);
    unset($_SESSION['student_name']);
    unset($_SESSION['student_last_login']);
    unset($_SESSION['matnumber']);
    unset($this->student_id);
    unset($this->student_name);
    unset($this->student_last_login);
    unset($this->matnumber);
    return true;
}
private function check_stored_student_login(){
    if(isset($_SESSION['student_id'])){
    $this->student_id = $_SESSION['student_id'];
    $this->student_name = $_SESSION['student_name'];
    $this->student_last_login = $_SESSION['student_last_login'];
    $this->matnumber = $_SESSION['matnumber'];
    
}
}
private function student_login_duration_time(){
    if(!isset($this->student_last_login)){
        return false;
    }elseif(($this->student_last_login + self::STUDENT_MAX_TIME) < time()){
        return false;
    }else{
        return true;
    }
} 
public function message($msg=""){
    if(!empty($msg)){
        //this is set message
        $_SESSION['message']=$msg;
        return true;
    }else{
        //this is a get message;
        return $_SESSION['message'] ?? '';
    }

}
public function clear_message(){
    unset($_SESSION['message']);
}
}

 
?>