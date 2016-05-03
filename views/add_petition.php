<?php

if($_SERVER['REQUEST_METHOD']=='POST') {

    include '../init/db.php';
    include '../init/user.php';

    $title=$_POST['title'];
    $whom=$_POST['whom'];
    $content=$_POST['content'];
    $amount=$_POST['amount'];
    $img=$_POST['img'];
    if ($img==""){
        $img="img/1.jpg";

    }
     $sql="insert into petitions values(NULL ,".$USER_DATA->id.", \"".$title."\", \"".$whom."\", \"".$content."\", \"".$amount."\", \"".$img."\",0)";
    $connection->query($sql);
    header("Location:../?page=home");

}


else{

    header("Location:../?page=404");

}


?>