<?php 
Class Student extends DatabaseObject{
//start of active record design patten

static protected $table_name = "student";
static protected $db_column = ['id','name', 'email', 'institution',
                               'department', 'matnumber', 'year',  'password'];

//End of active record desing pattern
//setting out the class properties
public $id;
public $name;
public $email;
public $institution;
public $department;
public $matnumber;
public $year;
protected $password;
public $pass;
public $confirm_password;
protected $password_required=true;

//assigning values to properites using the constructor 
public function __construct($args=[]){
    $this->name = $args['name'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->institution = $args['institution'] ?? '';
    $this->department = $args['department'] ?? '';
    $this->matnumber = $args['matnumber'] ?? '';
    $this->year = $args['year'] ?? '';
    $this->time = $args['time'] ?? time();
    $this->pass = $args['pass'] ?? '';
    $this->confirm_password = $args['confirm_password'] ?? '';
//Another way of doing it but even private and protected properties will be set.
//     foreach($args as $key => $value){
//         if(property_exists($this,$key)){
//             $this->$key= $value;
//         }
//     }
//  }
}
public function validate(){
  $this->errors=[];
  if(is_blank($this->name)) {
      $this->errors[] = "Name cannot be blank.";
    } elseif(!has_length($this->name, ['min' => 2, 'max' => 255])) {
      $this->errors[]= "Name must be between 2 and 255 characters.";
    }

    if(is_blank($this->email)) {
      $this->errors[] = "Email cannot be blank.";
    } 
     elseif (!has_valid_email_format($this->email)) {
      $this->errors[] = "Email must be a valid format.";
    }
    elseif(is_blank($this->email)) {
      $this->errors[] = "Email cannot be blank.";
    } 
    elseif (!has_unique_matnumber($this->matnumber, $this->id ?? 0)) {
      $this->errors[] = "Matnumber not allowed. Try another.";
    }
    if($this->password_required) {
    if(is_blank($this->pass)) {
      $this->errors[] = "Password cannot be blank.";
    } elseif (!has_length($this->pass, array('min' => 8))) {
      $this->errors[] = "Password must contain  or more characters";
    } elseif (!preg_match('/[A-Z]/', $this->pass)) {
      $this->errors[] = "Password must contain at least 1 uppercase letter";
    } elseif (!preg_match('/[a-z]/', $this->pass)) {
      $this->errors[] = "Password must contain at least 1 lowercase letter";
    } elseif (!preg_match('/[0-9]/', $this->pass)) {
      $this->errors[] = "Password must contain at least 1 number";
    } elseif (!preg_match('/[^A-Za-z0-9\s]/', $this->pass)) {
      $this->errors[] = "Password must contain at least 1 symbol";
    }
  
    if(is_blank($this->confirm_password)) {
      $this->errors[] = "Confirm password cannot be blank.";
    } elseif ($this->pass !== $this->confirm_password) {
      $this->errors[] = "Password and confirm password must match.";
    }
  }
    return $this->errors;
}
protected function set_password(){
  $this->password = password_hash($this->pass, PASSWORD_BCRYPT);
}
public function verify_password($password){
 return password_verify($password,$this->password);
}
protected function create(){
  $this->set_password();
  return parent::create();
  }
protected function update(){
    //validate password   
    if($this->pass != ''){
    $this->set_password();
    }else{
    //password not be updated,skiping hashing
    $this->password_required=false;
    }
    return parent::update();
  }
//
static public function find_by_matnumber($matnumber){
  $sql = "SELECT * FROM " . static::$table_name ." ";
  $sql .= "WHERE matnumber='" . self::$database->escape_string($matnumber) . "'";

  $obj_array = static::find_by_sql($sql);
  if(!empty($obj_array)){
  return array_shift($obj_array);

  }else{
      
      return false;
  }

}



}
?>