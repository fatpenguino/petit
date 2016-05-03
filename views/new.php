		<main class="main-content">
				<div class="container">
				<div class="question col-md-offset-3">
				<h1 class="col-md-8">Напишите название петиции</h1>
				<p class="col-md-8" style="text-align:justify; padding: 0; ">Это первое, что люди увидят о вашей петиции. Привлеките их внимание с помощью краткого названия, которое фокусирует на решении, которое вы предлагаете им поддержать.</p>

				 <form action="index.php?page=whom" method="post">
					<input type="text" name="title" class="form-control" style="width: 500px;" required >
					<?php
						if ($USER_DATA==null){
					?>
					 <button type="submit"  class="btn btn-primary "  style="margin: 10px 0 0 415px;" onClick='alert("Пожалуйства войдите в систему чтобы создать петицию")'>Продолжить</button>
					<?php }
					else { ?>
					 <button type="submit"  class="btn btn-primary "  style="margin: 10px 0 0 415px;">Продолжить</button>

					 <?php }?>
					</form>
				</div>

				<div class="howto col-md-offset-3">
					<h3>Как написать хороший заголовок?</h3>
					<ul>
					<li><h4>Пишите четко и кратко</h4>
						<p>Например: "Деканат запретил студентам парковать машины в университете"
							А не "Прекратите ущемлять права студентов, даешь парковку !"
						</p>
				    </li>
					<li><h4>Сфокусируйтесь на решении проблемы</h4>
						<p>Например: "Примите в МУИТ закон против курение"
							А не "Запретите студентам курить"				</p>
					</li>
					<li><h4>Расскажите о важности и срочности</h4>
						<p>Например: "Поставьте знак мокрый пол, пока никто не ушибся"							</p>
					</li>

					</ul>
				</div>


				</div> <!-- .container -->
			</main>
		