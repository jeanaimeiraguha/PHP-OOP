<?php
class Shape {
    public function area() {
        return "Calculating area...";
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function area() {
        return $this->length * $this->width;
    }
}

// Create objects
$circle = new Circle(7);
$rectangle = new Rectangle(10, 5);

echo "Circle Area: " . $circle->area();         // Circle Area: 153.9380400259
echo "Rectangle Area: " . $rectangle->area();   // Rectangle Area: 50
?>
