<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<xmp>

		// singleton

		class SomeClass{
			static $instance;

			private $name;

			function __construct($name){
				$this->name = $name;
				echo "New Instance Created\n<br>";
			}

			static function getInstance($name=null){
				if (!self::$instance) {
					if($name){
						self::$instance = new SomeClass($name);
					}else {
						self::$instance = new SomeClass('');
					}
				}else {
					echo "Old Instance Supplied\n<br>";
				}
				return self::$instance;
			}	

			function sayName(){
				echo $this->name."\n<br>";
			}
		}


		/*$sc1 = new SomeClass();
		$sc2 = new SomeClass();
		$sc3 = new SomeClass();*/

		$sc1 = SomeClass::getInstance("Rahim");
		$sc2 = SomeClass::getInstance('Karim');
		$sc3 = SomeClass::getInstance();

		$sc1->sayName();
		$sc2->sayName();
		$sc3->sayName();

	</xmp>
	<h3>Result:</h3>

	<?php

// singleton

class SomeClass{
	static $instance;

	private $name;

	function __construct($name){
		$this->name = $name;
		echo "New Instance Created\n<br>";
	}

	static function getInstance($name=null){
		if (!self::$instance) {
			if($name){
				self::$instance = new SomeClass($name);
			}else {
				self::$instance = new SomeClass('');
			}
		}else {
			echo "Old Instance Supplied\n<br>";
		}
		return self::$instance;
	}	

	function sayName(){
		echo $this->name."\n<br>";
	}
}


/*$sc1 = new SomeClass();
$sc2 = new SomeClass();
$sc3 = new SomeClass();*/

$sc1 = SomeClass::getInstance("Rahim");
$sc2 = SomeClass::getInstance('Karim');
$sc3 = SomeClass::getInstance();

$sc1->sayName();
$sc2->sayName();
$sc3->sayName();
?>


</body>
</html>


