<?php
$id = $_GET['id'];
$id=substr($id, 0, 1);
$connection->query("update one_time_sign set activation=1 where id=$id");

?>		<main class="main-content">
    <div class="container col-md-offset-3" style="height: 600px;">
        Вы успешно активировали потвердили свой подпись<br>
        <a href="?page=home" class="btn-link"> Перейти в главную страницу</a>
        <div>
</main>