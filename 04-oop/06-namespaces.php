<?php
namespace MyApp;

class User {
    public function sayHello() {
        echo "Hello from MyApp";
    }
}

$user = new User();
$user->sayHello();
