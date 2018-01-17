<?php session_start();
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/17
 * Time: 上午 12:35
 */
include('dbConn.inc.php');
$number=$_POST['number'];
$content=$_POST['content'];
$type=$_POST['type'];

if (isset($_SESSION['username'])){
    if($number!=null&&$content!=null&&$type!=null){
        $sql= "INSERT INTO content (`number`,`content`,`type`)
VALUES ('$number','$content','$type')";

        if($mysqli->query($sql) === TRUE) {

            echo'新增成功';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=sample.php>';
        }else{
            echo $query;
            echo'新增錯誤';
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