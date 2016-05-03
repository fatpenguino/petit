<?php

	$connection = new mysqli("localhost","root","","petit");
	$connection->query("SET NAMES utf8");
	if(!$connection->connect_error){

		define("CONNECTED",true);

	}else{

		define("CONNECTED",false);

	}

?>
