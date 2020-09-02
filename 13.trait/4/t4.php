<?php
trait MyTrait{
    static $number;
    abstract function sayHi();
}

class MyClassA{
    use MyTrait;

    function sayHi(){
        echo "Hi";
    }
}

class MyClassB{
    use MyTrait;

    function sayHi(){
        echo "Hi++";
    }
}

MyClassA::$number = 2;
echo MyClassA::$number;

$ma = new MyClassA();
echo $ma::$number;

$mb = new MyClassB();
MyClassB::$number = 8;
echo MyClassB::$number;
echo $mb::$number;

