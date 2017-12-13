<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/12/13
 * Time: 上午 07:51
 */
session_start();
session_unset();
session_destroy();
header('Location: index2.php');
//echo '<meta http-equiv=REFRESH CONTENT=1,url=index.php>';
exit;