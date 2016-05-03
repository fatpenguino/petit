
<?php
$query=$connection->query("select * from petitions where status=0 ");
$query1=$connection->query("select * from users");
$nou=0;
while ($u=$query1->fetch_object()){
	$nou++;
}
?>

<header class="jumbotron">
	<div class="container platform">
		<h1>Студенческая платформа для ваших петиций</h1>
		<p style="display:inline-block;"><?php echo $nou;?> студента уже присоединились.</p>
		<a href="?page=wins" style="color:red;">Наши победы</a>
		<p><a href="?page=new" class="btn btn-primary btn-large">Создать петицию</a>
		</p>

	</div>
</header>

<div class="container" style="margin-top:20px; ">

	<?php
	while($row=$query->fetch_object()){
		?>
		<div class="petition col-md-12">


			<h3 style="margin-left: 15px;">
				<?php echo $row->title; ?>
			</h3>

			<div class="col-md-8">

				<p style="text-align: center">
					by <a href="index.php">
						<?php
						$query1=$connection->query("select * from users where id=".$row->user_id."");
						if ($row1=$query1->fetch_object())
							echo $row1->name;
						echo " ";
						echo $row1->surname;
						?></a>
				</p>
				<img  src="<?php echo $row->img; ?>" width="600px" height="400px" style="margin-bottom:10px;">

				<p class="excerpt"><?php echo $row->content; ?></p>
			</div>
			<div class="col-md-4 side" >
				<?php
				$query2=$connection->query("select count(*) amnt from sign where petition_id=".$row->id."");
				$query4=$connection->query("select count(*) amnt from one_time_sign where petition_id=".$row->id." and activation=1");
				$total=$row->amount;

				$first=0;
				if($row2=$query2->fetch_object())
				{
					$first+=$row2->amnt;
				}
				if($row4=$query4->fetch_object())
				{
					$first+=$row4->amnt;
				}
				if ($first==$row->amount){
							include "won.php";
							echo "<h3>Победа!</h3>";
            ?>
                <div style="margin-bottom: 20px;">
					<p class="signed"><?php echo $first;?> участника петиции</p>
                <div class="bar">
                    <div class="first" style="width: <?php echo $first/$total*100?>%;"></div>
                </div>
                <p class="signed unsigned"> Еще необходимо <?php echo $total-$first;?> до  <?php echo $total;?> </p>
            </div>

				<?php	} else {
				?>
				<h3>Подписать петицию</h3>

				<div style="margin-bottom: 20px;">
					<p class="signed"><?php echo $first;?> участника петиции</p>
					<div class="bar">
						<div class="first" style="width: <?php echo $first/$total*100?>%;"></div>
					</div>
					<p class="signed unsigned"> Еще необходимо <?php echo $total-$first;?> до  <?php echo $total;?> </p>
				</div>
				<?php if ($USER_DATA==null) { ?>
					<form role="form" action="views/one_time_sign.php" style="margin-top:40px;" method="post">

						<input type="text" class="form-control sideform"
							   id="InputName"  name="name" placeholder="Имя"/ required>
						<input type="text" class="form-control sideform"
							   id="InputSurname" name="surname" placeholder="Фамилия"/ required>

						<input type="email" class="form-control sideform"
							   id="InputEmail" name="email" placeholder="email(@iitu.kz)" required="email"/>

						<textarea class="form-control sideform" id="InputTextarea" rows="3" name="comment"  placeholder="Ваш комментарий..." ></textarea>

						<input type="hidden" name="id" value="<?php echo $row->id;?>"/>

						<button type="submit" class="btn btn-primary" style="margin: 10px 0;">Подписать</button>

					</form>



				<?php }
				else {
					$query3=$connection->query("select * from sign where user_id=".$USER_DATA->id." and petition_id=".$row->id." ");
					if ($row3=$query3->fetch_object())
					{
						?>
						<br>
						<input type="text" value="<?php echo $USER_DATA->name." ".$USER_DATA->surname ;?>" class="form-control sideform roi" readonly="readonly"  >
						<h3 style="text-align: center">You are supported us!</h3>
						<?php
					}else {
						?>

						<form  action="views/sign.php" style="margin-top:60px;" method="post" >
							<input type="text" value="<?php echo $USER_DATA->name." ".$USER_DATA->surname ;?>" class="form-control sideform roi" readonly="readonly"  >
							<input type="hidden" name="petition" value="<?php echo $row->id; ?>">
							<textarea class="form-control sideform" id="InputTextarea" rows="3" name="comment"  placeholder="Ваш комментарий..." ></textarea>


							<button type="submit" class="btn btn-primary sideform">Подписать</button>
						</form>

					<?php  } } } ?>
			</div>

		</div>
		<hr>
	<?php } ?>

	<!-- <ul class="pager">
        <li class="previous">
            <a href="#">&larr; Older</a>
        </li>
        <li class="next">
            <a href="#">Newer &rarr;</a>
        </li>
    </ul>
    Pager -->


</div>


</div>