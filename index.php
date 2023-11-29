<?php

trait Say_World {
    public $name = "Jane Doe";

    public function say_hello() {
        echo "Hello Trait".PHP_EOL;
    }
}

class Base {
    use Say_World;
}

$b = new Base();
$b->say_hello();
echo $b->name.PHP_EOL;