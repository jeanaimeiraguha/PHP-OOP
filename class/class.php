<?php
/*
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
        $this->$type=$type;     
           echo "This is in type of".$type;
     }
    
}
$Mango =new Fruits();
$type->set_type("type1");
$Mango->set_name("Mango");
*/
/*
class Car {
    public $brand;
    public $color;

    // Constructor
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Method
    public function drive() {
        return "The $this->color $this->brand is driving.";
    }
}

// Create an object
$myCar = new Car("Toyota", "red");
echo $myCar->drive();
*/
class Car{
    public $name;
    public $type;
    public $driver;
    public $color;
    public function __construct($name,$type,$color,$driver){
        $this->name=$name; 
        $this->type=$type; 
        $this->color=$color; 
        echo $name."Is diven by".$driver;
        //$this->"color is/
    } 
    
}
$Doo= new Car("Toyota","23k" ,"Red", "Kty");
//pcho $name;
?>


