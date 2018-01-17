<?php   session_start();
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/3
 * Time: 上午 08:58
 */
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
include("dbConn.inc.php");
//$account = $_POST['account'];
//$id = $_POST['id'];
//$email = $_POST['email'];
//$tel = $_POST['tel'];
//$userType = $_POST['exampleRadios'];
<<<<<<< HEAD
$ID = $_POST['ID'];
=======
$ID = $_POST['id'];
>>>>>>> 4d4c31f8987844e6c7cf82cb26d05b32420a109d
$author = $_POST['author'];
$title = $_POST['title'];
$publisher = $_POST['publisher'];
$pages = $_POST['pages'];

if(isset($_SESSION['username'])) {
    if ($ID!= null && $author != null && $title != null && $publisher != null && $pages != null) {
        $query = "UPDATE paper SET `ID` ='$ID',`author`=$author,`title`='$title',`publisher`=$publisher,`pages`=$pages WHERE`ID`='$ID' ";
        if ($mysqli->query($query) === TRUE) {
            echo '修改成功!';
//            echo $query;
            echo '<meta http-equiv=REFRESH CONTENT=2;url=admin.php>';
        } else {
            echo '修改錯誤';
            echo "<script type=\"text/javascript\>alert(\"$mysqli->error\");history,back();</script>";
        }
        $mysqli->close();
    } else {
        echo "<script type=\"text/javascript\">alert(\"您輸入的資料不完整!\");history.back();</script>";
    }
}else {
    echo "<script type=\"text/javascript\">alert(\"您沒有權限\");window.location(\"index2.php\");</script>";
}
?>
