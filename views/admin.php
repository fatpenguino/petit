
<?php

	include '../init/db.php';
	include '../init/admin.php';

	$page = 'index';
	if($ADMIN_DATA!=null){

	$page = 'list';
	if($_SERVER['REQUEST_METHOD']=='POST'){

			if(isset($_POST['act'])){

				if($_POST['act']=='logout'){

					unset($_SESSION['admin_id']);
					header("Location:?");  

				}
			}
		}

		
		if(isset($_GET['page'])){

			if($_GET['page']=='index'){

				$page = 'index';

			}else if($_GET['page']=='add'){

				$page = 'add';

			}else if($_GET['page']=='edit'){

				$page = 'edit';

			}else if($_GET['page']=='list'){

				$page = 'list';

			}
			else{

				$page = '404';

			}

		}
	}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Adminka</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="../fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
				<link rel="stylesheet" href="../bootstrap.css">
		
		<link rel="stylesheet" href="../style.css">
		


	</head>


	<body>
		

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="../index.php" id="branding">
				<img src="../images/logo.png" alt="" class="logo" style="margin-top:-20px;">
						<div class="logo-copy">
							<h1 class="site-title">WikiMovie</h1>
							<small class="site-description">Reviews about movies</small>
								</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
								<?php
								if($ADMIN_DATA!=null){
									?>
							<li class="menu-item <?php if ($page=='add'){echo "current-menu-item"; }?>"><a href="?page=add">Add</a></li>
							<li class="menu-item <?php if ($page=='list'){echo "current-menu-item"; }?>"><a href="?page=list">List</a></li>
							<li class="menu-item "><form action="" method="post">
							            <input type="hidden" name="act" value="logout"/>
			          					<button type="submit" class="btn btn-link" style="height:20px; vertical-align:top; margin-top:-9px; ">Logout</button>
							 	</form>
							 </li>	
						<?php } else	{?>
							<li class="menu-item"><a href="?page=index">Login</a></li>
						<?php }	?>
						</ul> <!-- .menu -->

						
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			
				<?php include 'admin/'.$page.'.php';?>
				
				
			
		</div>
		<!-- Default snippet for navigation -->
						<footer class="site-footer">
				<div class="container">
					<div class="colophon">Copyright 2014 Company name, Designed by Themezy. All rights reserved</div>
				</div> <!-- .container -->

			</footer>

		<script src="../js/jquery-1.11.1.min.js"></script>
		<script src="../js/plugins.js"></script>
		<script src="../js/app.js"></script>
		
	</body>

</html>