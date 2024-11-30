<?php

class Fruits{
    // Objects
    public $name;
    public $type;
    //Method
    function set_name($name){
        $this->name= $name; 
        echo "She loves".$name; 
     }
     function  set_type($type){
        echo "This is in type of".$type;
     }
    
}
$Mango =new Fruits();
$type->set_type("type1");
$Mango->set_name("Mango");

?>