<?php
class ResultObject extends databaseObject{

static public $table_name = "";
static protected $db_column = ['id','matnumber', 'course1', 'score1',  'unit1',
    'grade1','course2', 'score2',  'unit2','grade2',
    'course3', 'score3',  'unit3','grade3',
    'course4', 'score4',  'unit4','grade4',
    'course5', 'score5',  'unit5','grade5',
    'course6', 'score6',  'unit6','grade6',
    'course7', 'score7',  'unit7','grade7',
    'course8', 'score8',  'unit8','grade8',
    'course9', 'score9',  'unit9','grade9',
    'course10', 'score10',  'unit10','grade10',
    'course11', 'score11',  'unit11','grade11',
    'course12', 'score12',  'unit12','grade12',
    'course13', 'score13',  'unit13','grade13',
    'course14', 'score14',  'unit14','grade14',
    'course15', 'score15',  'unit15','grade15',
    'course16', 'score16',  'unit16','grade16',
    'course17', 'score17',  'unit17','grade17',
    'course18', 'score18',  'unit18','grade18',
    'course19', 'score19',  'unit19','grade19',
    'course20', 'score20',  'unit20','grade20'];

//setting out the properites
public $id;public $matnumber;public $course1;public $score1;public $unit1;public $grade1;
public $course2;public $score2;public $unit2;public $grade2;
public $course3;public $score3;public $unit3;public $grade3;
public $course4;public $score4;public $unit4;public $grade4;
public $course5;public $score5;public $unit5;public $grade5;
public $course6;public $score6;public $unit6;public $grade6;
public $course7;public $score7;public $unit7;public $grade7;
public $course8;public $score8;public $unit8;public $grade8;
public $course9;public $score9;public $unit9;public $grade9;
public $course10;public $score10;public $unit10;public $grade10;
public $course11;public $score11;public $unit11;public $grade11;
public $course12;public $score12;public $unit12;public $grade12;
public $course13;public $score13;public $unit13;public $grade13;
public $course14;public $score14;public $unit14;public $grade14;
public $course15;public $score15;public $unit15;public $grade15;
public $course16;public $score16;public $unit16;public $grade16;
public $course17;public $score17;public $unit17;public $grade17;
public $course18;public $score18;public $unit18;public $grade18;
public $course19;public $score19;public $unit19;public $grade19;
public $course20;public $score20;public $unit20;public $grade20;
 
//setting the constructor
public function __construct($args=[]){
    $this->id = $args['id'] ?? '';$this->matnumber = $args['matnumber'] ?? '';
    $this->course1 = $args['course1'] ?? '';$this->score1 = $args['score1'] ?? '';
    $this->unit1 = $args['unit1'] ?? '';$this->grade1 = $args['grade1'] ?? '';
    $this->course2 = $args['course2'] ?? '';$this->score2 = $args['score2'] ?? '';
    $this->unit2 = $args['unit2'] ?? '';$this->grade2 = $args['grade2'] ?? '';
    $this->course3 = $args['course3'] ?? '';$this->score3 = $args['score3'] ?? '';
    $this->unit3 = $args['unit3'] ?? '';$this->grade3 = $args['grade3'] ?? '';
    $this->course4 = $args['course4'] ?? '';$this->score4 = $args['score4'] ?? '';
    $this->unit4 = $args['unit4'] ?? '';$this->grade4 = $args['grade4'] ?? '';
    $this->course5 = $args['course5'] ?? '';$this->score5 = $args['score5'] ?? '';
    $this->unit5 = $args['unit5'] ?? '';$this->grade5 = $args['grade5'] ?? '';
    $this->course6 = $args['course6'] ?? '';$this->score6 = $args['score6'] ?? '';
    $this->unit6 = $args['unit6'] ?? '';$this->grade6 = $args['grade6'] ?? '';
    $this->course7 = $args['course7'] ?? '';$this->score7 = $args['score7'] ?? '';
    $this->unit7 = $args['unit7'] ?? '';$this->grade7 = $args['grade7'] ?? '';
    $this->course8 = $args['course8'] ?? '';$this->score8 = $args['score8'] ?? '';
    $this->unit8 = $args['unit8'] ?? '';$this->grade8 = $args['grade8'] ?? '';
    $this->course9 = $args['course9'] ?? '';$this->score9 = $args['score9'] ?? '';
    $this->unit9 = $args['unit9'] ?? '';$this->grade9 = $args['grade9'] ?? '';
    $this->course10 = $args['course10'] ?? '';$this->score10 = $args['score10'] ?? '';
    $this->unit10 = $args['unit10'] ?? '';$this->grade10 = $args['grade10'] ?? '';
    $this->course11 = $args['course11'] ?? '';$this->score11 = $args['score11'] ?? '';
    $this->unit11 = $args['unit11'] ?? '';$this->grade11 = $args['grade11'] ?? '';
    $this->course12 = $args['course12'] ?? '';$this->score12 = $args['score12'] ?? '';
    $this->unit12 = $args['unit12'] ?? '';$this->grade12 = $args['grade12'] ?? '';
    $this->course13 = $args['course13'] ?? '';$this->score13 = $args['score13'] ?? '';
    $this->unit13 = $args['unit13'] ?? '';$this->grade13 = $args['grade13'] ?? '';
    $this->course14 = $args['course14'] ?? '';$this->score14 = $args['score14'] ?? '';
    $this->unit14 = $args['unit14'] ?? '';$this->grade14 = $args['grade14'] ?? '';
    $this->course15= $args['course15'] ?? '';$this->score15 = $args['score15'] ?? '';
    $this->unit15 = $args['unit15'] ?? '';$this->grade15 = $args['grade15'] ?? '';
    $this->course16 = $args['course16'] ?? '';$this->score16 = $args['score16'] ?? '';
    $this->unit16 = $args['unit16'] ?? '';$this->grade16 = $args['grade16'] ?? '';
    $this->course17 = $args['course17'] ?? '';$this->score17 = $args['score17'] ?? '';
    $this->unit17 = $args['unit17'] ?? '';$this->grade17 = $args['grade17'] ?? '';
    $this->course18 = $args['course18'] ?? '';$this->score18 = $args['score18'] ?? '';
    $this->unit18 = $args['unit18'] ?? '';$this->grade18 = $args['grade18'] ?? '';
    $this->course19 = $args['course19'] ?? '';$this->score19 = $args['score19'] ?? '';
    $this->unit19 = $args['unit19'] ?? '';$this->grade19 = $args['grade19'] ?? '';
    $this->course20 = $args['course20'] ?? '';$this->score20 = $args['score20'] ?? '';
    $this->unit20 = $args['unit20'] ?? '';$this->grade20 = $args['grade20'] ?? '';

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
public  function update(){
    $this->validate();
    if(!empty($this->errors)){return false ;}
    $attributes = $this->sanitized_attributes();
    $attribute_pairs = [];
    foreach($attributes as $key => $value){
        $attribute_pairs[] = "{$key}='{$value}'";
    }
    $sql = "UPDATE ". static::$table_name ." SET ";
    $sql .= join(', ', $attribute_pairs);
    $sql .= " WHERE matnumber='" . self::$database->escape_string($this->matnumber) . "' ";
    $sql .= "LIMIT 1";
    $result = self::$database->query($sql);
    return $result;

}
public function save(){
    if(isset($this->matnumber)){
        return $this->update();
    }else{
        return $this->create();
    }
}
}
?>