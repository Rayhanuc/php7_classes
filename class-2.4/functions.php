<?php 


// if you use one parameter than you have to give rest of eveyone parameter 
function serve($foodType= "Coffee",$numberOfItems="1 cup"){// parameter
	echo "{$numberOfItems} of {$foodType} has/have been served";
}