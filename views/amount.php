<?php
$title=$_POST['title'];
$whom=$_POST['whom'];
$content=$_POST['content'];

?>
<main class="main-content">
	<div class="container">
		<div class="question col-md-offset-3">
			<h1 class="">Укажите сколько подписей вам потребуется для достижение цели</h1>
		<br>
			<form action="index.php?page=addimg" method="post">
				<input type="text" name="amount" class="form-control" style="width: 500px;" required >
				<input type="hidden" name="title" value="<?php echo $title; ?>">
				<input type="hidden" name="whom" value="<?php echo $whom; ?>">
				<input type="hidden" name="content" value="<?php echo $content; ?>">

				<button type="submit"  class="btn btn-primary "  style="margin: 10px 0 0 415px;">Next</button>
			</form>
		</div>

		</div>

		<div style="height: 300px;">
	</div> <!-- .container -->
</main>
