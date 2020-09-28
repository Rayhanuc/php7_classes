<?php 

class Person{
	public $firstName;
	public $lastName;
	/*private $private;
	static $static;
	public function sayHi(){

	}*/
}

$p = new Person();
$p->firstName = "John";
$p->lastName = "Doe";

echo json_encode($p);