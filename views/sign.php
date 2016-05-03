<?php

if($_SERVER['REQUEST_METHOD']=='POST') {

    include '../init/db.php';
    include '../init/user.php';

    $petition= $_POST['petition'];
    $comment= $_POST['comment'];

    $connection->query("insert into sign values (NULL, ".$USER_DATA->id.",".$petition.",\"" . $comment. "\")");


        header("Location:../?page=home");

}
else{

    header("Location:../?page=methoderr");

}


?>