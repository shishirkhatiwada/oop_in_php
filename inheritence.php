// Inheritance is a fundamental concept in object-oriented programming (OOP) that allows you to create a new class (subclass or derived class) that inherits properties and methods from an existing class (base class or parent class). This promotes code reuse and the creation of class hierarchies. Here's an example of inheritance in PHP:

<?
class Animal {
    public $name;
    public $species;

    public function __construct($name, $species) {
        $this->name = $name;
        $this->species = $species;
    }

    public function speak() {
        echo "$this->name is speaking.\n";
    }
}

// Dog is a subclass of Animal, inheriting properties and methods
class Dog extends Animal {
    public function bark() {
        echo "$this->name is barking.\n";
    }
}

// Cat is a subclass of Animal, inheriting properties and methods
class Cat extends Animal {
    public function meow() {
        echo "$this->name is meowing.\n";
    }
}

// Creating instances of Dog and Cat
$dog = new Dog("Buddy", "Dog");
$cat = new Cat("Whiskers", "Cat");

// Using inherited methods
$dog->speak(); // Output: Buddy is speaking.
$cat->speak(); // Output: Whiskers is speaking.

// Using subclass-specific methods
$dog->bark();  // Output: Buddy is barking.
$cat->meow();  // Output: Whiskers is meowing.

?>


In this example:

We have a base class called Animal with properties name and species and a method speak.

We then create two subclasses, Dog and Cat, using the extends keyword. These subclasses inherit the properties and methods of the Animal class.

The Dog subclass adds a new method bark, and the Cat subclass adds a new method meow.

We create instances of both Dog and Cat, and we can access the properties and methods inherited from the Animal class as well as the subclass-specific methods.



