<?php
class GpObject extends databaseObject{

static public $table_name = "detail";
 static public $detail_column = " ";
static protected $db_column = ['id','matnumber', 'firstone', 'secondone',  'firsttwo',
'secondtwo','firstthree','secondthree','firstfour','secondfour','firstfive','secondfive'];

//setting out the properites
public $id;public $matnumber;public $firstone;public $secondone;
public $firsttwo;public $secondtwo;public $firstthree;public $secondthree;
public $firstfour;public $secondfour;public $firstfive; public $secondfive;


//setting the constructor
public function __construct($args=[]){
    $this->id = $args['id'] ?? '';$this->matnumber = $args['matnumber'] ?? '';
    $this->firstone = $args['firstone'] ?? '';$this->secondone = $args['secondone'] ?? '';
    $this->firsttwo = $args['firsttwo'] ?? '';$this->secondtwo = $args['secondtwo'] ?? '';
    $this->firstthree = $args['firstthree'] ?? '';$this->secondthree = $args['secondthree'] ?? '';
    $this->firstfour = $args['firstfour'] ?? '';$this->secondfour = $args['secondfour'] ?? '';
    $this->firstfive = $args['firstfive'] ?? '';$this->secondfive = $args['secondfive'] ?? '';
    

}
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
static public function insert_matnumber($courses){
    $sql = "INSERT INTO " . static::$table_name ." ";
    $sql .= "(matnumber)";
    $sql .= "VALUE (";
    $sql .= "'" . self::$database->escape_string($courses['matnumber']) . "'";
    $sql .= ")";

    $result = self::$database->query($sql);
    return $result;
}

static public function edit_gp($courses,$matnumber){
    $sql = "UPDATE ". static::$table_name ." SET ";
    $sql .= static::$detail_column . 
    self::$database->escape_string($courses['gp']). "' ";
    $sql .= " WHERE matnumber='" . self::$database->escape_string($matnumber) . "' ";
    $sql .= "LIMIT 1";
    $result = self::$database->query($sql);
    return $result;

}
}
?>