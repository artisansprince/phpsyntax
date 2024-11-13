<?php
trait Greet {
    public function sayHello() {
        echo "Hello!";
    }
}

class User {
    use Greet;
}

$user = new User();
$user->sayHello();
