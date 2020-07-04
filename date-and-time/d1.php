<?php
/*echo time()."<br/>";
echo date('d/m/y')."<br/>";
echo date('d/F/Y');*/

// unix epoch
// unix timestamp
// echo microtime(true)."<br/>";
// var_dump(microtime(false))."<br/>";

// $mt = microtime(true);
// printf("%10.18f",$mt);

$startTime = microtime(true);
factorial(1000);
sleep(3);
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
printf("%10.8f",$executionTime);

function factorial($n) {
	$result = 1;
	for ($i = 1; $i<=$n; $i++){
		$result *=$i;
	}
	return $result;
}