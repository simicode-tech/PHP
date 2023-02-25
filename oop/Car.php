<?php

class Car{
    public $name;
    public $color;
    public $size;
    public $model;
    public $type;
    function sayHello(){
        echo "hello from car class". PHP_EOL;
        
    }
}
$car1 = new Car();
$car1->sayHello();