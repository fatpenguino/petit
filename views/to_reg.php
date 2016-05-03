<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){

		include '../init/db.php';

			$login = $_POST['login'];
			$password = $_POST['password'];
			$login = $_POST['login'];
			$password = $_POST['password'];
			
			$connection->query("insert into users 
								values(null, \"".$login."\", \"".sha1($password)."\",\"".$name."\",\"".$surname."\")
								");
	
				header("Location:../?page=home");
		
	}
	else{

		header("Location:../admin.php?page=methoderr");

	}
		?>