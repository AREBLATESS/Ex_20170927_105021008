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
    <nav class="navbar navbar-toggleable-md fixed-top navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">陳良弼教授 Website</a>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="index2.php">Home <span class="sr-only">(current)</span></a></li>
                <li class="nav-item">
                    <a class="nav-link" href="journalPaper.php">Journal Paper</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="conferencePaper.php">Conference Paper</a>
<!--                    <a class="nav-link disabled" href="#">Disabled</a>-->
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">更多關於Arbee Chen</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="award.php">Awards</a>
                        <a class="dropdown-item" href="courseInformation.php">Course Information</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <!--        left end-->
            <?php
            if (isset($_SESSION["username"])&&$_SESSION['userType']=="1") {
                ?>
                <form class="form-inline my-2 my-lg-0">
                    <li style="color: white"><?php echo "welcome".$_SESSION['username']  ; ?></li>
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


    <?php
}
?>