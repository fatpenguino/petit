<?php
    $title=$_POST['title'];

?>
<main class="main-content">
    <div class="container">
        <div class="question col-md-offset-3">
            <h1 class="">Кто может повлиять на решение вашей проблемы?</h1>
            <p class="col-md-8" style="text-align:justify; padding: 0; ">Идеальный адресат петиции обладает властью и полномочиями для того, чтобы решить важную для вас проблему. Обычно, это студенческое правительство, деканат.
                </p>

            <form action="index.php?page=content" method="post">
                <input type="text" name="whom" class="form-control" style="width: 500px;" required >
                <input type="hidden" name="title" value="<?php echo $title; ?>">
                <button type="submit"  class="btn btn-primary "  style="margin: 10px 0 0 415px;">Продолжить</button>
            </form>
        </div>


        <div class="howto col-md-offset-3">
            <h3>Как выбрать правильного адресата петиции
            </h3>
            <ul>
                <li><h4>Выберите того, кто действительно мог бы на что-то повлиять</h4>
                    <p>Для начала выясните, кто действительно мог бы напрямую решить вашу проблему..."
                    </p>
                </li>
                <li><h4>Подумайте, действительно ли Ректор должен быть адресатом</h4>
                    <p>Много вопросов можно на самом деле решить на местном уровне. 					</p>
                </li>
                <li><h4>Выберите адресата, с которым вы можете вести переговоры</h4>
                    <p>Ваша кампания быстрее одержит победу, если вы сумеете договориться с адресатом.							</p>
                </li>

            </ul>
        </div>   </div> <!-- .container -->
</main>
		