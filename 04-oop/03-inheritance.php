<?php
class Animal {
    public function sound() {
        echo "Some sound";
    }
}

class Dog extends Animal {
    public function sound() {
        echo "Woof!";
    }
}

$dog = new Dog();
$dog->sound();
