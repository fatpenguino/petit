<?php
$title=$_POST['title'];
$whom=$_POST['whom'];
?>
<main class="main-content">
	<div class="container">
		<div class="question col-md-offset-3">
			<h1 class="">Что вы хотите изменить?	</h1>
			<p class="col-md-8" style="text-align:justify; padding: 0; ">Расскажите о проблеме, которую вы хотите изменить, что она значит для вас, вашей группе  и как изменится ваша учебная жизнь, если вопрос разрешится.



            </p>

			<form action="index.php?page=amount" method="post">
                <textarea class="form-control" rows="5" name="content" style="width: 500px;" required ></textarea>
                <input type="hidden" name="title" value="<?php echo $title; ?>">
                <input type="hidden" name="whom" value="<?php echo $whom; ?>">

                <button type="submit"  class="btn btn-primary "  style="margin: 10px 0 0 415px;">Продолжить</button>
			</form>
		</div>

		<div class="howto col-md-offset-3">
			<h3>Как привлечь внимание большего числа людей к вашей проблеме</h3>
			<ul>
				<li><h4>Расскажите о проблеме через историю людей, для которых ее решение жизненно важно</h4>
					<p>Люди более активно подключаются к вашей кампании, если они понимают, на кого и как влияет проблема, указанная в ней.</p>
				</li>
				<li><h4>Опишите возможное решение</h4>
					<p>Расскажите, что должно произойти, кто и как может повлиять на ситуацию. .					</p>
				</li>
				<li><h4>Сделайте текст личным</h4>
					<p>Читатели более склонны поддержать и подписать петицию, если понимают, почему для вас это важно.				</p>
				</li>

			</ul>
		</div>
	</div> <!-- .container -->
</main>
		