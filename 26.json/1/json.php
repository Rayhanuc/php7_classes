<?php

$data = array(
	"firstname" => "John",
	"lastname" => "Doe",
	"email" => "john@doe.com"
);


//JSON
echo json_encode($data, JSON_PRETTY_PRINT);