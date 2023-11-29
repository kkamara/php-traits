<?php

trait Say_World {
    public function say_hello() {
        echo "Hello Trait".PHP_EOL;
    }
}

class Base {
    use Say_World;
}

$b = new Base();
$b->say_hello();