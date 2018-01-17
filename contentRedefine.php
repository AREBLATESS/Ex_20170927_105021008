<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php session_start();
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/16
 * Time: 下午 04:15
 */
include('dbConn.inc.php');
$number=$_POST['number'];
$content=$_POST['content'];
$type=$_POST['type'];

if(isset($_SESSION['username'])){
    if($content!=null){
        $query = "UPDATE content SET `content` ='$content' WHERE`number`=$number";
        if($mysqli->query($query)=== TRUE){
            echo'修改成功';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=sample.php>';
        }else{
            echo $query;
            echo'修改錯誤';
            echo"<script type=\"text/javascript\>alert(\"$mysqli->error\");history,back();</script>";
        }
        $mysqli->close();
    }
    else {
        echo "<script type=\"text/javascript\">alert(\"您輸入的資料不完整!\" );history.back();</script>";

    }
}else {
    echo "<script type=\"text/javascript\">alert(\"您沒有權限\");window.location(\"index2.php\");</script>";
}

?>