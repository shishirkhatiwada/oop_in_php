// In object-oriented programming (OOP) in PHP, objects are instances of classes. Objects are created based on the blueprint or template provided by a class, and they encapsulate both data (properties or attributes) and behaviors (methods or functions). Here's a closer look at how objects work in PHP:

// Class Definition: First, you define a class using the class keyword. A class defines the structure and behavior of objects.

<?php
class Car {
    public $brand;
    public $model;

    public function start() {
        echo "The $this->brand $this->model is starting.\n";
    }
}
?>


<!-- Object Creation: Once the class is defined, you can create objects (instances) of that class using the new keyword.
 -->
<?php
$car1 = new Car();
$car2 = new Car();
?>

<!-- Accessing Properties: You can access and modify object properties using the object operator ->.
 -->

<?php
$car1->brand = "Toyota";
$car1->model = "Camry";

$car2->brand = "Honda";
$car2->model = "Civic";
?>

<!-- Calling Methods: You can call object methods using the object operator as well.
 -->

<?php
$car1->start(); // Output: The Toyota Camry is starting.
$car2->start(); // Output: The Honda Civic is starting.
?>

<!-- Encapsulation: Objects encapsulate their data and behavior, which means that the properties and methods of an object are contained within that object and do not interfere with properties and methods of other objects.
 -->









