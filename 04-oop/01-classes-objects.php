<?php
class Person {
    public $name;

    public function sayHello() {
        return "Halo, " . $this->name;
    }
}

$person = new Person();
$person->name = "Prince";
echo $person->sayHello();
