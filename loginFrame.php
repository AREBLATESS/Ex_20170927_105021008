<?php  session_start();
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 10:48
 */
?>
<!-- 設定網頁編碼為UTF-8 -->
<html lang="en" xmlns:margin-right="http://www.w3.org/1999/xhtml">
<!--font-family: 'Dancing Script', cursive;-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro|Spectral+SC" rel="stylesheet">
    <link rel="stylesheet" href="css/loginFrame.css">
    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 23px;
        }

    </style>
</head>
<form name="form" method="post" action="login.php">




    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <body>
                <div style=" font-family: 'Spectral SC', serif;">
                    <h1 class="text-center" >Welcome</h1>

                </div>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text"  name="account" class="form-control input-lg" placeholder="Username"/>
                </div>

                <div class="form-group">
                    <input type="password"  name="password" class="form-control input-lg" placeholder="Password"/>
                </div>

                <div class="form-group">
                    <input type="submit" name="button" class="btn btn-block btn-lg btn-primary" value="登入"/>
                    <span class="pull-right" ><a href="#">Register</a></span><span ><a href="index2.php">首頁</a></span>
                    </body>
                </div>
            </div>
        </div>
    </div>

</form>
</html >
