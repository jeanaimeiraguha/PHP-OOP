<?php
class Animal{
    public $name;
    public $type;
    public $feed;
    public function Messg($name,$type,$feed){
        $this->name =$name;    
        $this->type =$type;    
        $this->feed =$feed;    
            return "$this->name feed on";
    }

    }
    $animal= new Animal();
    echo $animal->Messg("dfd", "dfd" , "dfd")
?>
