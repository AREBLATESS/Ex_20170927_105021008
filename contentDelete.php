<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php session_start();
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/16
 * Time: 下午 04:41
 */
include ('dbConn.inc.php');
$number =$_GET['number'];
//記得在按鈕設回傳
if(isset($_SESSION['username'])){
    $query="DELETE FROM `content` WHERE `number`=$number";
    if($mysqli->query($query)){
        echo "<p style='text-align: center; color: rgb(255,0,0); margin-top:3em;'>
                Success!!</p>";
        echo '<meta http-equiv=REFRESH CONTENT="2;url=admin.php">';
    }else{
        echo "Error deleting record :" . mysqli_error($mysqli)."000";
//        echo '<meta http-equiv=REFRESH CONTENT=3;url=admin.php>';
        echo $number ;
    }
}else{
    echo "You don't have permission to access this site.";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index2.php>';
}
?>

