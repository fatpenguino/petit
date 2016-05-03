<?php

	include '../init/db.php';
	include '../init/user.php';
	if($USER_DATA!=null){
		unset($_SESSION['user_id']);

		session_destroy();
		
	}
	
	header("Location:../index.php");
	
?>