<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<?php
session_start();
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 10:49
 */
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
if(!@$link = mysqli_connect($db_server,$db_user,$db_password,$db_name))
    die("誰準你隨意玩弄我");

//資料庫連線採UTF8
//mysqli_query("SET NAMES UTF8");

$id=$_POST['account'];
$pw=sha1($_POST ['password']);

//搜尋資料庫資料
$sql="SELECT * FROM `user` where account ='$id'";
$result=mysqli_query($link,$sql);
$row=@mysqli_fetch_row($result);
echo $sql;
    echo $row[1]."<br>";
    echo $row[3]."<br>";
    echo $id."<br>";
    echo $pw."<br>";
//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id !=null && $pw !=null && $row[1] == $id && $row[3]==$pw) {
    $_SESSION["username"] = $id;
    $_SESSION["userType"]=$row[6];
    require_once ('sendmail.php');
    echo $_SESSION["username"];
    echo '登入成功';
    echo ' <meta http-equiv="refresh" content="2;url=index2.php">';
//    echo $row[1];
//    echo $row[2];

}
else{
    echo '登入失敗!';
//    echo $row[1];
//    echo $row[2];
}