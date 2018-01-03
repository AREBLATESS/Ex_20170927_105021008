<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/3
 * Time: 上午 09:01
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
//if(!@$link = mysqli_connect($db_server,$db_user,$db_password,$db_name))
//    die("誰準你隨意玩弄我");

//資料庫連線採UTF8
//mysqli_query("SET NAMES UTF8");

$mysqli = new mysqli($db_server,$db_user,$db_password,$db_name);

if($mysqli->connect_errno){
echo"Connect failed:" . $mysqli->connect_error."<br/>";
exit();
}
