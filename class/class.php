<?php

class Fruits{
    // Objects
    public $name;
    public $type;
    //Method
    function set_name($name){
        $this->name= $name;   
     }
    
}
$Mango =new Fruits();
$Mango->set_name("Mango");
?>