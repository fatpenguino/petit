<?php
$id = $_GET['id'];
$email = $_GET['email'];
$query=$connection->query("select * from users where activation=0");
 while($row=$query->fetch_object()){
    if (md5("!@#".$row->id."#@!")==$id){
        $connection->query("update users set activation=1 where id=".$row->id."");
    }

}

?>		<main class="main-content">
    <div class="container col-md-offset-3" style="height: 600px;">
        Вы успешно активировали свой аккаунт, теперь вы можете зайти под своим именем

    <div>
    </main>
