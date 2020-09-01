<?php
class Student{
    function __construct($name, $age){
        $this->name = $name;
        if($age<4){
            throw new Exception("Too Young",1001);
        }else if($age>35){
            throw new Exception("Too Old",1002);
        }
        $this->age = $age;
    }
}

try {
    $s = new Student('Rahim',38);
} catch (Exception $e) {
    echo $e->getCode().":".$e->getMessage();
}


