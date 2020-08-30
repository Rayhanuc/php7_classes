<?php
/* function __autoload($name){
    if(!class_exists($name)){
        include "{$name}.php";
    }
} */

function autoload($name){
    if(strpos($name,"Planet_")!==false){
        $filename = str_replace("Planet_","",$name);
        include strtolower("planets/{$filename}.php");
    }else {
    include strtolower("{$name}.php");

    }
}

spl_autoload_register('autoload');



/* include "bike.php";
include "planet.php";
include "spaceship.php"; */

(new Spaceship)->launch();
(new Planet_Mars)->getName();
(new Bike)->getType();