<?php
$title=$_POST['title'];
$whom=$_POST['whom'];
$content=$_POST['content'];
$amount=$_POST['amount'];
?>
<main class="main-content">
	<div class="container">
		<div class="question col-md-offset-3">
			<h1 class="">Загрузить фото или видео</h1>
			<p class="col-md-8" style="text-align:justify; padding: 0; ">Петиции с фото или видео собирают в 6 раз больше подписей
			</p>

			<form action="views/add_petition.php" method="post">
				<input type="text" name="img" class="form-control" style="width: 500px;"  >
				<input type="hidden" name="title" value="<?php echo $title; ?>">
				<input type="hidden" name="whom" value="<?php echo $whom; ?>">
				<input type="hidden" name="content" value="<?php echo $content; ?>">
				<input type="hidden" name="amount" value="<?php echo $amount; ?>">

				<button type="submit"  class="btn btn-primary "  style="margin: 10px 0 0 325px;">Save and Upload</button>
			</form>
		</div>

		<div class="howto col-md-offset-3">
			<h3>Подсказки по добавлению фото или видео</h3>
			<ul>
				<li><h4>Выберите изображение, эмоционально выражающее суть вашей петиции</h4>
					<p>Фотографии людей и животных обычно работают очень хорошо.</p>
				</li>
				<li><h4>Попробуйте загрузить фото размером 1600 на 900 пикселей или больше</h4>
					<p>Большие фото выглядят хорошо на всех экранах.					</p>
				</li>
				<li><h4>Выберите фото, подходящее для всех аудиторий</h4>
					<p>Убедитесь, что на вашем фото нет изображения жестокого насилия или порнографии.	</p>
				</li>

			</ul>
		</div>
	</div> <!-- .container -->
</main>
