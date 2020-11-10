<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<xmp>

		// singleton2

class FileWriter{
	static $instances = [];

	private $filename;

	function __construct($filename){
		$this->filename = $filename;
	}

	static function getInstance($filename){
		if (!isset(self::$instances[$filename])) {
			self::$instances[$filename] = new FileWriter($filename);
		}
		return self::$instances[$filename];
	}	

	function writeData($data){
		echo "Writing Data to {$this->filename}\n<br>";
	}

	static function dump(){
		print_r(self::$instances);
	}
}



$fw1 = FileWriter::getInstance("/tmp/abcd.txt");
$fw2 = FileWriter::getInstance("/tmp/abcde.txt");
$fw3 = FileWriter::getInstance("/tmp/abcdf.txt");
$fw4 = FileWriter::getInstance("/tmp/abcdg.txt");
FileWriter::getInstance("/tmp/ab.txt")->writeData('Some Data');

$fw1->writeData('some data');
$fw2->writeData('some data');
$fw3->writeData('some data');
$fw4->writeData('some data');

		

	</xmp>
	<h3>Result:</h3>

	<?php

// singleton2

class FileWriter{
	static $instances = [];

	private $filename;

	function __construct($filename){
		$this->filename = $filename;
	}

	static function getInstance($filename){
		if (!isset(self::$instances[$filename])) {
			self::$instances[$filename] = new FileWriter($filename);
		}
		return self::$instances[$filename];
	}	

	function writeData($data){
		echo "Writing Data to {$this->filename}\n<br>";
	}

	static function dump(){
		print_r(self::$instances);
	}
}



$fw1 = FileWriter::getInstance("/tmp/abcd.txt");
$fw2 = FileWriter::getInstance("/tmp/abcde.txt");
$fw3 = FileWriter::getInstance("/tmp/abcdf.txt");
$fw4 = FileWriter::getInstance("/tmp/abcdg.txt");
FileWriter::getInstance("/tmp/ab.txt")->writeData('Some Data');

$fw1->writeData('some data');
$fw2->writeData('some data');
$fw3->writeData('some data');
$fw4->writeData('some data');

?>


</body>
</html>


