<?php session_start();
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/1
 * Time: 上午 10:03
 */
include ('fun.inc.nav.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <title>Arbee L.P. Chen's Home page</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">
</head>

<body style="background-size:100%;background-attachment:fixed;background-image: linear-gradient(to right,rgba(255,255,255,0.8),rgba(255,255,255,0.5)),url(image/background.png);">
<<<<<<< HEAD
<?php nav(1) ?>

=======

<nav class="navbar navbar-toggleable-md fixed-top navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <?php nav(1) ?>
<!--            <li class="nav-item active">-->
<!--                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">Link</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link disabled" href="#">Disabled</a>-->
<!--            </li>-->
<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>-->
<!--                <div class="dropdown-menu" aria-labelledby="dropdown01">-->
<!--                    <a class="dropdown-item" href="#">Action</a>-->
<!--                    <a class="dropdown-item" href="#">Another action</a>-->
<!--                    <a class="dropdown-item" href="#">Something else here</a>-->
<!--                </div>-->
<!--            </li>-->
        </ul>
<!--        left end-->
        <?php
        if (isset($_SESSION["username"])&&$_SESSION['userType']=="1") {
        ?>
            <form class="form-inline my-2 my-lg-0">
                <li><a href="admin.php"><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;主控台</a></li>
                <li><a href="logout.php">Logout</a></li>
            </form>
            <?php
        }else if(isset($_SESSION["username"])){
            ?>
        <form class="form-inline my-2 my-lg-0">
                <li><a href="logout.php">Logout</a></li>
        </form>
            <?php
        }else{
        ?>
        <form class="form-inline my-2 my-lg-0">
            <a class="nav-link" href="loginFrame.php">login</a>
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
            <?php
        }
        ?>
    </div>
</nav>
>>>>>>> b3de706386923bee6a7b77bcc277fc627c58a3da


<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-12 col-md-9">
            <p class="float-right hidden-md-up">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
            </p>
<<<<<<< HEAD
            <div style="font-weight: bold;margin: 100px auto 50px auto">
=======
<!--            <div class="jumbotron">-->
            <div style="font-weight:bold;margin: 100px auto 50px auto">
>>>>>>> b3de706386923bee6a7b77bcc277fc627c58a3da
                <h1>陳良弼 (Arbee L.P. Chen)</h1>
                <h2 style="color:gray">講座教授</h2>
                <div align="center">
                <img src="image/lbchen.jpg" alt="">
                <tr>
                <p>
                    學歷： 美國南加州大學資訊工程博士<br/>
                    辦公室： L509<br/>
                    分機： 1075<br/>
                    E-mail： arbee@asia.edu.tw<br/>
                </p>
                </tr>
                </div>
            </div>


            <div class="row">
                <div class="col-6 col-lg-4">
                    <h2>認識 Arbee教授</h2>
                    <p> </p>
<<<<<<< HEAD
                    <p><a class="btn btn-secondary" href="index2.php" role="button">View details &raquo;</a></p>
                </div><!--/span-->
                <div class="col-6 col-lg-4">
                    <h2>Arbee專區</h2>
                    <p> </p>
                    <p><a class="btn btn-secondary" href="conferencePaper.php" role="button">View details &raquo;</a></p>
                </div><!--/span-->
                <div class="col-6 col-lg-4">
                    <h2>Arbee授課</h2>
                    <p> </p>
                    <p><a class="btn btn-secondary" href="courseInformation.php" role="button">View details &raquo;</a></p>
=======
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!--/span-->
                <div class="col-6 col-lg-4">
                    <h2>Arbee專區</h2>
                    <p></p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!--/span-->
                <div class="col-6 col-lg-4">
                    <h2>Arbee授課</h2>
                    <p></p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
>>>>>>> b3de706386923bee6a7b77bcc277fc627c58a3da
                </div><!--/span-->

            </div><!--/row-->
        </div><!--/span-->

<!--        <div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">-->
<!--            <div class="list-group">-->
<!--                <a href="#" class="list-group-item active">Link</a>-->
<!--                <a href="#" class="list-group-item">首頁</a>-->
<!--                <a href="#" class="list-group-item">簡歷</a>-->
<!--                <a href="#" class="list-group-item">學術</a>-->
<!--                <a href="#" class="list-group-item">著作</a>-->
<!--                <a href="#" class="list-group-item">學生</a>-->
<!--                <a href="#" class="list-group-item">常用連結</a>-->
<!--<!--                <a href="#" class="list-group-item">Link</a>-->-->
<!--<!--                <a href="#" class="list-group-item">Link</a>-->-->
<!--<!--                <a href="#" class="list-group-item">Link</a>-->-->
<!--            </div>-->
<!--        </div><!--/span-->-->
    </div><!--/row-->

    <hr>

    <footer>
        <p>&copy;亞洲大學 powered by AREBLATESS</p>
    </footer>

</div><!--/.container-->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="offcanvas.js"></script>
</body>
</html>
<!--https://bootsnipp.com/snippets/featured/fancy-navbar-login-sign-in-form 想要用這個LOGIN-->