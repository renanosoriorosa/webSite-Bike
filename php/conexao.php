<?php 
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	$host="localhost";
	$user="root";
	$senha="";
	$db="cadastro";

	$con = new mysqli($host,$user,$senha,$db);

	if ($con->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}else{
		$mensagem="Connected successfully<br>";
		}
 ?>