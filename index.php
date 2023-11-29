<?php

spl_autoload_register(
    function($class) {
        include "includes/$class.php";
    }
);

new Student();
new Person();