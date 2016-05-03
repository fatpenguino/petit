<?php

	session_start();
	$ADMIN_DATA = null;

	if(isset($_SESSION['admin_id'])){

		$query = $connection->query(" SELECT * FROM admins WHERE id = ".$_SESSION['admin_id']." ");

		if($row=$query->fetch_object()){

			$ADMIN_DATA = $row;

		}

	}

?>