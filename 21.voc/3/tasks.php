<?php

include_once "config.php";

$status = 0;
$action = $_POST['action'] ?? '';
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if (!$connection) {
    throw new Exception("Cannot connect to database");
}else {
	if('register' == $action){
		$username = $_POST['email'] ?? '';
		$password = $_POST['password'] ?? '';
		if ($username && $password) {
			$hash = password_hash($password, PASSWORD_BCRYPT);
			echo $hash;
			$query = "INSERT INTO users(email, password) VALUES ('{$username}','{$hash}')";
			mysqli_query($connection,$query);
			if(mysqli_error($connection)){
				$status = 1;
			}else {
				$status = 3;
			}
		}else {
			$status = 2;
		}
		header("Location: index.php?status={$status}");
	}
}