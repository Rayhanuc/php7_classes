<!DOCTYPE html>
<html>
<head>
	<title>Facade Design Pattern</title>
</head>
<body>

	<xmp>
// Facade

class SpaceShuttle{
	function powerOn(){
		echo "Power On\n<br>";
	}

	function checkTemperature(){
		echo "Temperature Ok\n<br>";
	}

	function checkFuel(){
		echo "Fuel Ok\n<br>";
	}

	function startEngine(){
		echo "Engine Started\n<br>";
	}

	function startThursters(){
		echo "Bye Bye";
	}
}

class SpaceShuttleFacade{
	private $shuttle;
	function __construct(SpaceShuttle $shuttle){
		$this->shuttle = $shuttle;
	}

	function takeOff(){
		$this->shuttle->PowerOn();
		$this->shuttle->checkTemperature();
		$this->shuttle->checkFuel();
		$this->shuttle->startEngine();
		$this->shuttle->startThursters();
	}
}





$ss = new SpaceShuttle();

$ssf = new SpaceShuttleFacade($ss);
$ssf->takeOff();


//launch
/*$ss->powerOn();
$ss->checkTemperature();
$ss->checkFuel();
$ss->startEngine();
$ss->startThursters();*/
	</xmp>

	<h3>Result: </h3>

	<?php 
// Facade

class SpaceShuttle{
	function powerOn(){
		echo "Power On\n<br>";
	}

	function checkTemperature(){
		echo "Temperature Ok\n<br>";
	}

	function checkFuel(){
		echo "Fuel Ok\n<br>";
	}

	function startEngine(){
		echo "Engine Started\n<br>";
	}

	function startThursters(){
		echo "Bye Bye";
	}
}

class SpaceShuttleFacade{
	private $shuttle;
	function __construct(SpaceShuttle $shuttle){
		$this->shuttle = $shuttle;
	}

	function takeOff(){
		$this->shuttle->PowerOn();
		$this->shuttle->checkTemperature();
		$this->shuttle->checkFuel();
		$this->shuttle->startEngine();
		$this->shuttle->startThursters();
	}
}





$ss = new SpaceShuttle();

$ssf = new SpaceShuttleFacade($ss);
$ssf->takeOff();


//launch
/*$ss->powerOn();
$ss->checkTemperature();
$ss->checkFuel();
$ss->startEngine();
$ss->startThursters();*/

 ?>

</body>
</html>