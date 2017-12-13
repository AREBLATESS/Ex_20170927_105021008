<?php session_start()
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/12/13
 * Time: 上午 08:01
 */?>

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

    <title>Off Canvas Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">
</head>



<?php
//連接資料庫
//資料庫設定
//資料庫位置
$db_server="localhost";
//資料庫名稱
$db_name="105021008";
//資料庫管理者帳號
$db_user="105021008";
//資料庫管理者密碼
$db_password ="#9ZQ6IR9e";
//對資料庫連線
$mysqli = new mysqli($db_server,$db_user,$db_password,$db_name);

if($mysqli->connect_errno){
    echo"Connect failed:" . $mysqli->connect_error."<br/>";
    exit();
}
//該修改處
$sql = 'SELECT 	ID,author,title,publisher,pages,userType FROM `paper`';
$result = $mysqli->query($sql);

if(mysqli_connect_errno()){
    echo "Connect failed :" . mysqli_connect_error();
    exit();
}
$count = $result->num_rows;
//
if(isset($_SESSION['username'])){
    ?>
    <body>
<!--    <div style="margin:50px auto auto auto" align="center" >-->
        <div id="content" align="center">
<!--            navbar-->
            <nav class="navbar navbar-toggleable-md fixed-top navbar-inverse bg-inverse">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Navbar</a>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
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

            <h1 >paper清單(<?php echo $count;?>)</h1>
            <div class="table-responsive" align="center">
            <table class="table table-inverse" style="width:83%;">
                <tr>
                    <th>No.</th>
                    <th>ID</th>
                    <th>author</th>
                    <th>	title</th>
                    <th>publisher	</th>
                    <th>	memo</th>
                </tr>
                <?php
                $i=1;
                    foreach($result as $user){
                        ?>
                        <tr <?php
                            switch ($user['userType']){
                                case 0:
                                    echo "class=\"success\"";
                                    break;
                                case 1:
                                    echo "class=\"danger\"";
                                    break;
                                case 3:
                                    echo "class=\"info\"";
                                    break;
                                default:
                                    echo "class=\"warning\"";
                            }
                        ?>>
                            <td><?php echo $i++;?></td>
                            <td><?php echo $user['ID'];?></td>
                            <td><?php echo $user['author'];?></td>
                            <td><?php echo $user['title'];?></td>
                            <td><?php echo $user['publisher	'];?></td>
                            <td>
<!--                                <a class="btn btn-large btn-warning" herf="updateFrame.php?id=--><?php //echo $user['id'];?><!--">UPDATE</a>-->
                                <a class="btn btn-large btn-warning" href="paperupdateFrame.php?id=<?php echo $user['id'];?>">UPDATE</a>
                                <a class="btn btn-large btn-danger" onclick="return confirm('Are you sure?')"
                                    href="paperDelete.php?id=<?php echo $user['id']; ?>">DELETE</a>
                            </td>
                        </tr>
<?php
                        }
?>
            </table>
            </div>
            </div>
<!--        --><?php //footer(); ?>
    </div>
    </body>
</html>
        <?php
}else{
    ?>
    <script>alert("You don't have permission to access this page.");</script>
    <meta http-equiv=REFRESH CONTENT=0;url=index.php>
    <?php
}