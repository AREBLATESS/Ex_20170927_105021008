<?php
session_start();
include("dbConn.inc.php");
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/12/13
 * Time: 上午 08:32
 */
$ID = $_GET['ID'];
if(isset($_SESSION['username'])){
    $query = "DELETE FROM `paper` WHERE `ID` = $ID";
    if($mysqli->query($query)){
        echo "<p style='text-align: center; color: rgb(255,0,0); margin-top:3em;'>
                Success!!</p>";
        echo '<meta http-equiv=REFRESH CONTENT="2;url=admin.php">';
    }else{
        echo "Error deleting record :" . mysqli_error($mysqli);
        echo '<meta http-equiv=REFRESH CONTENT=3;url=admin.php>';
    }
}else{
    echo "You don't have permission to access this site.";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index2.php>';
}