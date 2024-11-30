<?php
class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        return "$this->name makes a sound.";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "$this->name barks.";
    }
}

// Create objects
$animal = new Animal("Generic Animal");
$dog = new Dog("Buddy");

echo $animal->makeSound(); // Generic Animal makes a sound.
echo $dog->makeSound();    // Buddy barks.
?>
