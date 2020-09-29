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

// echo json_encode($p);

$jsonData = json_encode($p);


$decodedJSONData = json_decode($jsonData,true);
print_r($decodedJSONData);
echo "<br>";
// echo $decodedJSONData->firstName;

echo $decodedJSONData['firstName'];

echo "<br>";

print_r(json_decode(json_encode(array(['key' => 'value'])),true));