<?php
include '../init/db.php';
$email = $_POST['email'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$comment= $_POST['comment'];
$pet_id= $_POST['id'];
$won=false;
if (isset($_POST['check'])){
        if ($_POST['check']!=""){
           $won=true;
        }

}
$query=$connection->query("select count(*) count from one_time_sign");

    $counter=0;
if($row=$query->fetch_object())
{
        $counter=$row->count;
}
$counter++;

$token = strtok($email, "@");
$idasd= $token;
$token = strtok("@");
$check=$token;
if($check=='iitu.kz') {

    $md= md5("!@#" . "feisal". "#@!");
    $md5_id=$counter.$md;

    $sql = "insert into one_time_sign
								values(" . $counter . ",\"" . $pet_id . "\",\"" . $email . "\",\"" . $name . "\",\"" . $surname . "\",\"" . $comment. "\", 0)
								";
    $connection->query($sql);

    $url_mail = "http://" . $_SERVER['SERVER_NAME'] . "/?page=one_time_activate&id=" . $md5_id . "";
    $message = "Для подтверждения вашей подписи пройдите по ссылке:\r\n" . $url_mail;
    mail($email, "Please Confirm your signature", $message, "Content-type:text/plain; charset = utf-8\r\nFrom:Petit");
    echo $url_mail;

        header("Location:../?page=home");

}
else {

    header("Location:../?page=home");

}