<?php
class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function __destruct() {
        echo "Goodbye, $this->name";
    }
}

$person = new Person("Prince");
