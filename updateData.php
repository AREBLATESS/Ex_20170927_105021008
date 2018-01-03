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
$account = $_POST['account'];
$username = $_POST['username'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$userType = $_POST['exampleRadios'];

if(isset($_SESSION['username'])) {
    if ($account != null && $username != null && $tel != null) {
        $query = "UPDATE user SET `account` ='$account',`name`=$username,`tel`='$tel',`userType`=$userType WHERE`email`='$email' ";
        if ($mysqli->query($query) === TRUE) {
            echo '修改成功!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=users.php>';
        } else {
            echo '修改錯誤';
            echo "<script type=\"text/javascript\>alert(\"$mysqli->error\");history,back();</script>";
        }
        $mysqli->close();
    } else {
        echo "<script type=\"text/javascript\">alert(\"您輸入的資料不完整!\");history.back();</script>";
    }
}else {
    echo "<script type=\"text/javascript\">alert(\"您沒有權限\");window.location(\"index.php\");</script>";
}
?>
