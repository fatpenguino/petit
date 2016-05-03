<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

	include '../init/db.php';
	$act=$_POST['act'];
	if ($act=='login'){
		$email= $_POST['email'];
		$password = $_POST['password'];
		$password=md5("!@#".$password."#@!");
		$query = $connection->query("SELECT * FROM users
								WHERE email = \"".$email."\"
								AND password = \"".$password."\" and activation=1
								LIMIT 1 
								");

		if($row = $query->fetch_object()){

			session_start();

			$_SESSION['user_id'] = $row->id;

			header("Location:../?page=home");

		}else{


			header("Location:../?page=home");

		}
	}
	else  if ($act=='register'){

		$email = $_POST['email'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];

		$token = strtok($email, "@");
		$id= $token;
		$token = strtok("@");
		$check=$token;
		if($check=='iitu.kz'){
			echo $check;


		$password = md5("!@#".$password."#@!");
		$sql="insert into users
								values(".$id.",\"".$email."\",\"".$password."\",\"".$name."\",\"".$surname."\", 0)
								";
		$connection->query($sql);
		$md5_mail = md5("!@#".$email."#@!");
		$md5_id = md5("!@#".$id."#@!");

		$url_mail = "http://".$_SERVER['SERVER_NAME']."/?page=activate&id=".$md5_id."&email=".$md5_mail;
		$message = "Для подтверждения регистрации пройдите по ссылке ниже:\r\n".$url_mail;
		mail($email, "Confirm registration on petit", $message,"Content-type:text/plain; charset = utf-8\r\nFrom:Petit");

			header("Location:../?page=home");

		}
		else {


			header("Location:../?page=home&error=1");

		}





	}
	else {
		header("Location:../?page=home");

	}

}


else{

	header("Location:../?page=methoderr");

}


?>