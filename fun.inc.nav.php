<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 10:44
 */
function nav($flag)
{

?>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <nav class="navbar navbar-toggleable-md fixed-top navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">陳良弼教授 Website</a>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="index2.php"> <i class="fa fa-home" aria-hidden="true">Home</i>
                        <span class="sr-only">(current)</span></a></li>
                <li class="nav-item">
                    <a class="nav-link" href="sample.php"><i class="fa fa-briefcase" aria-hidden="true">Journal Paper</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sample2.php"><i class="fa fa-building-o" aria-hidden="true">Conference Paper</i></a>
<!--                    <a class="nav-link disabled" href="#">Disabled</a>-->
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-info-circle" aria-hidden="true">更多關於Arbee Chen</i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="sample3.php"><i class="fa fa-trophy" aria-hidden="true">Awards</i></a>
                        <a class="dropdown-item" href="sample4.php"><i class="fa fa-graduation-cap" aria-hidden="true">Course Information</i></a>
                        <a class="dropdown-item" href="http://csie.asia.edu.tw/images/alp_cv(short).pdf">Something else here</a>
                    </div>
                </li>
            </ul>
            <!--        left end-->
            <?php
            if (isset($_SESSION["username"])&&$_SESSION['userType']=="1") {
                ?>
                <form class="form-inline my-2 my-lg-0">
                    <li style="color: white"><?php echo "welcome"."  ".$_SESSION['username'] ; ?></li>
                    <a href="admin.php"><i class="fa fa-tachometer" aria-hidden="true">主控台</i></a>
                    <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true">Logout</i></a></li>
                </form>
                <?php
            }else if(isset($_SESSION["username"])){
                ?>
                <form class="form-inline my-2 my-lg-0">
                    <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true">Logout</i></a></li>
                </form>
                <?php
            }else{
                ?>
                <form class="form-inline my-2 my-lg-0">
                    <a class="nav-link" href="loginFrame.php"><i class="fa fa-sign-in" aria-hidden="true">login</i></a>
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true">Search</i></button>
                </form>
                <?php
            }
            ?>
        </div>
    </nav>


    <?php
}
?>