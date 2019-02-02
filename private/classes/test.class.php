<?php 
Class Student{
//start of active record design patten

static protected $database;
static protected $db_column = ['id','name', 'email', 'institution',
                               'department', 'matnumber', 'year',  'password'];
public $errors=[];
static public function set_database($database){
    self::$database = $database;
}
static public function find_by_sql($sql){
    $result = self::$database->query($sql); 
    if(!$result){
     exit('Database query failed');
    }
    $object_array = [];
    while($record = $result->fetch_assoc()){
        $object_array[] = self::instantiate($record);
    }
    $result->free();
    return $object_array; 
}
static public function find_all(){
      $sql = "SELECT * FROM student";
      return self::find_by_sql($sql); 
}
static public function find_by_id($id){
        $sql = "SELECT * FROM student ";
        $sql .= "WHERE id='" . self::$database->escape_string($id) . "'";

        $obj_array = self::find_by_sql($sql);
        if(!empty($obj_array)){
        return array_shift($obj_array);

        }else{
            
            return false;
        }

        }
static protected function instantiate($record){
    $object = new self;
    foreach($record as $property => $value){
        if(property_exists($object , $property)){
            $object->$property = $value;
        }
    }
    return $object;
}
protected function validate(){
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

    return $this->errors;

}
protected function create(){
    $this->validate();
    if(!empty($this->errors)){return false ;}
    $attributes = $this->sanitized_attributes();
    $sql = "INSERT INTO student (";
    $sql .= join(', ', array_keys($attributes));
    $sql .= ") VALUES ('";
    $sql .= join("', '", array_values($attributes));
    $sql .= "')";
    $result = self::$database->query($sql);
    if($result){
        $this->id = self::$database->insert_id;
    }
    return $result;
}
protected  function update(){
    $this->validate();
    if(!empty($this->errors)){return false ;}
    $attributes = $this->sanitized_attributes();
    $attribute_pairs = [];
    foreach($attributes as $key => $value){
        $attribute_pairs[] = "{$key}='{$value}'";
    }
    $sql = "UPDATE student SET ";
    $sql .= join(', ', $attribute_pairs);
    $sql .= " WHERE id='" . self::$database->escape_string($this->id) . "' ";
    $sql .= "LIMIT 1";
    $result = self::$database->query($sql);
    return $result;

}
public function save(){
    if(isset($this->id)){
        return $this->update();
    }else{
        return $this->create();
    }
}
public function merge_attributes($args=[]){
    foreach($args as $key => $value){
    if(property_exists($this, $key) && !is_null($value)){
        $this->$key = $value;
    }
  }
 }
public function attributes(){
    $attributes=[];
    foreach(self::$db_column as $column){
        if($column == 'id'){ continue ;}
        $attributes[$column]= $this->$column;
    }
    return $attributes;
}

protected function sanitized_attributes(){
    $sanitized=[];
    foreach($this->attributes() as $key => $value){
        $sanitized[$key]=self::$database->escape_string($value);
    }
    return $sanitized;

}
public function delete(){
    $sql = "DELETE FROM student ";
    $sql .="WHERE id='". self::$database->escape_string($this->id) . "' ";
    $sql .="LIMIT 1"; 
    $result=self::$database->query($sql);
    return $result;
}
//End of active record desing pattern
//setting out the class properties
public $id;
public $name;
public $email;
public $institution;
public $department;
public $matnumber;
public $year;
private $password;

//assigning values to properites using the constructor
public function __construct($args=[]){
    $this->name = $args['name'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->institution = $args['institution'] ?? '';
    $this->department = $args['department'] ?? '';
    $this->matnumber = $args['matnumber'] ?? '';
    $this->year = $args['year'] ?? '';
    $this->time = $args['time'] ?? time();
    $this->password = $args['password'] ?? '';
//Another way of doing it but even private and protected properties will be set.
//     foreach($args as $key => $value){
//         if(property_exists($this,$key)){
//             $this->$key= $value;
//         }
//     }
//  }


}
}
?>