<!-- WAP to clone an Object -->

<?php
class Car {
    public $model;

    function __construct($model) {
        $this->model = $model;
    }
}

$car1 = new Car("Toyota");
$car2 = clone $car1;
$car2->model = "Honda";

echo "Car1: " . $car1->model . "<br>";
echo "Car2: " . $car2->model;
?>
