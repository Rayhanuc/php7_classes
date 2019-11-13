<?php 


/*

Determines if the argument is even or odd

*/
// one parameter can use only
function factorial($n){// parameter
	if (gettype($n)!="integer") {
		return "invalid type";
	}

    $result = 1;
    for($i=$n;$i>1;$i--){
        $result *= $i;
    }

    return $result;
}