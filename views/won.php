<?php
$connection->query("update petitions set status=1 where id=".$row->id."");

$querytologin=$connection->query("select user_id from petitions where id=".$row->id." ");
while($rowtologin=$querytologin->fetch_object()) {
    $querytologin2=$connection->query("select email from users where id=".$rowtologin->user_id." ");
    if ($rowtologin2=$querytologin2->fetch_object()) {
        $url_mail = "http://" . $_SERVER['SERVER_NAME'] . "/?page=wins";
        $message = "Поздравляю, петиция которая вы подписали выиграла, чтобы увидить перейдите по ссылке снизу:\r\n" . $url_mail;
        mail($rowtologin2->email, "Confirm registration on petit", $message, "Content-type:text/plain; charset = utf-8\r\nFrom:Petit");
    }
    }
?>