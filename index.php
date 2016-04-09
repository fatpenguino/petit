
<?php

include 'init/db.php';
include 'init/user.php';
$page = 'home';

if($USER_DATA!=null){



    if(isset($_GET['page'])){

        if($_GET['page']=='home'){

            $page = 'home';

        }else if($_GET['page']=='new') {

            $page = 'new';
        }
        else if($_GET['page']=='addimg') {

            $page = 'addimg';
        }
        else if($_GET['page']=='whom'){

            $page = 'whom';

        }else if($_GET['page']=='content'){

            $page = 'content';

        }else if($_GET['page']=='amount'){

            $page = 'amount';

        }else if($_GET['page']=='found'){

            $page = 'found';

        }

        else if($_GET['page']=='profile'){

            $page = 'profile';

        }
        else{

            $page = '404';

        }

    }
}


else {
    if (isset($_GET['page'])){

        if($_GET['page']=='home'){

            $page = 'home';

        }else if($_GET['page']=='new'){

            $page = 'new';

        }else if($_GET['page']=='list'){

            $page = 'list';

        }else if($_GET['page']=='contact'){

            $page = 'contact';

        }else if($_GET['page']=='about'){

            $page = 'about';

        }else if($_GET['page']=='login'){

            $page = 'login';

        }else if($_GET['page']=='found'){

            $page = 'found';

        }
        else if($_GET['page']=='profile'){

            $page = 'profile';

        }
        else{

            $page = '404';

        }
    }
}


?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->

<html class="no-js"> <!--<![endif]-->
<head>

    <!-- meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Petit</title>

    <!-- stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?page=home">
                <h1>petit</h1>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="?page=home">Home</span></a></li>
                <li><a href="?page=new">Start a petition</a></li>
                <li><a href="?page=list">Browse</a></li>
                <li><a href="#search"><i class="fa fa-search"></i> Search</a></li>


            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php
                if($USER_DATA!=null){
                    ?>
                   <li><a href=""> <?php  echo $USER_DATA->name." ".$USER_DATA->surname; ?> </a></li>
                        <li> <a href="views/logout.php">Logout</a>
                        </li>
                    </form>


                <?php } else { ?>
                  <li>  <a href="" data-toggle="modal" data-target="#myModalNorm"  >Sign In</a></li>
                  <li>  <a href="" data-toggle="modal" data-target="#myModalNorm2" >Sign Up</a></li>
                <?php } ?>
            </ul>
        </div><!-- end of /.navbar-collapse -->
    </div><!-- end of /.container -->
</nav>


<?php include 'views/'.$page.'.php';?>

<footer>
    <div class="container">
        <div class="row">
            <!-- copyright -->
            <div class="col-md-4 col-sm-4">
                copyright &copy; 2015
            </div>

            <!-- footer share button -->
            <div class="col-md-4 col-sm-4">
                <ul class="social-share text-center">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul> <!-- /.social-share -->
            </div>

            <!-- footer-nav -->
            <div class="col-md-4 col-sm-4">
                <ul class="footer-nav">
                    <li><a href="?page=about">About</a></li>
                    <li><a href="?page=privacy">Privacy</a></li>
                    <li><a href="?page=contacts">Contact</a></li>
                </ul> <!-- /.footer-nav -->
            </div>
        </div>
    </div>
</footer>

<!--  Necessary scripts  -->

<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jQuery.scrollSpeed.js"></script>
<script src="js/search.js"></script>
<script src="js/readmore.js"></script>

<!-- smooth-scroll -->

<script>
    $(function() {
        jQuery.scrollSpeed(100, 1000);
    });
</script>


<div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Sign In
                </h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">

                <form role="form" action="views/login_check.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control"
                               id="exampleInputEmail1" name="email" placeholder="Email" required/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control"
                               id="exampleInputPassword1"  name="password" placeholder="Password" required/>
                    </div>
                    <div class="checkbox">
                        <label>
                        </label>
                    </div>
                    <input type="hidden" name="act" value="login"/>

                    <input type="hidden" name="page" value="<?php echo $page;?>"/>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>

            <!-- Modal Footer -->

        </div>
    </div>
</div>



<div class="modal fade" id="myModalNorm2" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Sign Up
                </h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">

                <form role="form" action="views/login_check.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control"
                               id="exampleInputEmail1" name="email" placeholder="Email" required="email"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control"
                               id="exampleInputPassword1" name="password" placeholder="Password"  required/>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control"
                               id="exampleInputName1"  name="name" placeholder="Name"/ required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputSurname1">Surname</label>
                        <input type="text" class="form-control"
                               id="exampleInputSurname1" name="surname" placeholder="Surname"/ required>
                        <input type="hidden" name="act" value="register"/>
                        <input type="hidden" name="page" value="<?php echo $page;?>"/>

                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Sign Up</button>

                </form>

            </div>

        </div>
    </div>
</div>

            <div id="search">
                <button type="button" class="close" >×</button>
                <form action="?" method="get">
                    <input type="hidden" name="page" value="found" />
                    <input type="search" name="key" placeholder="type keyword(s) here" />
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
</body>
</html>
