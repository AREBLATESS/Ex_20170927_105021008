<?php session_start();
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/17
 * Time: 上午 12:09
 */
include ('dbConn.inc.php');
include('fun.inc.nav.php');
//$number=$_POST['number'];
//$content=$_POST['content'];
//$type=$_POST['type'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style1.css">
    <!--    bootstrap-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

    <style>
        $(document).ready(function(){
        $("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
        $("#mytable input[type=checkbox]").each(function () {
            $(this).prop("checked", true);
        });

        } else {
        $("#mytable input[type=checkbox]").each(function () {
            $(this).prop("checked", false);
        });
        }
        });

        $("[data-toggle=tooltip]").tooltip();
        });
    </style>
    <title>sample</title>
</head>
<body style="background-color: #e2d67e">

<?php
$sql = 'SELECT * FROM `content`';
$result = $mysqli->query($sql);
if(mysqli_connect_errno()){
    echo "Connect failed :" . mysqli_connect_error();
    exit();
}

$count = $result->num_rows;

if(isset ($_SESSION['username'])){
    ?>
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-12">
                <h4 class="title">Arbee 的 期刊論文</h4>
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                        <th></th>
                        <th>No.</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>content</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <?php if (isset($_SESSION["username"])&&$_SESSION['userType']=="1") {  ?>
                        <th>Edit</th>
                        <th>Delete</th>
                        <?php }?>
                        </thead>
                    </table>
                    <!--                    <div class="clearfix"></div>-->
                </div>
            </div>
        </div>
    </div>
    <?php foreach($result as $content) {
        if($content['type']==3){


            ?>
            <?php nav(1)?>
            <!--    <form action="contentRedefine.php" method="post">-->
            <div class="container" >
                <div class="row">
                    <div class="col-md-12">
                        <!--                    <h4>Bootstrap Snipp for Datatable</h4>-->
                        <div class="table-responsive">
                            <?php
                            $i=$number;
                            //                        while(1000<$i&&$i<2000){
                            ////                        for($i = $number;$i>1000&&$i<2000;$i++) {
                            //                            echo $content['number']
                            //                            ?>

                            <table id="mytable" class="table table-bordred table-striped">
                                <!--                            <thead>-->
                                <!--                            <th></th>-->
                                <!--                            <th></th>-->
                                <!--                            <th>content</th>-->
                                <!--                            <th></th>-->
                                <!--                            <th></th>-->
                                <!--                            <th>Edit</th>-->
                                <!--                            <th>Delete</th>-->
                                <!--                            </thead>-->
                                <!--                            上表格-->
                                <tbody>
                                <tr>
                                    <!--                            <td><input type="checkbox" class="checkthis" /></td>-->
                                    <td></td>
                                    <td><?php echo $content['number']  ?></td>
                                    <td><?php echo $content['content'] ?></td>
                                    <td></td>
                                    <td></td>
                                    <!--                            <td>Mohsin</td>-->
                                    <!--                            <td>Irshad</td>-->
                                    <!--                            <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>-->
                                    <!--                            <td>isometric.mohsin@gmail.com</td>-->
                                    <!--                            <td>+923335586757</td>-->
                                    <?php if (isset($_SESSION["username"])&&$_SESSION['userType']=="1") {  ?>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>

                                                        <?php }?>
                                </tr>
                                </tbody>
                            </table>
                            <!--                    <div class="clearfix"></div>-->
                        </div>
                    </div>
                </div>
            </div>

            <form action="contentRedefine.php" method="post">
                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                            </div>
                            <div class="modal-body">
                                <!--                    <div class="form-group">-->
                                <!--                        <input class="form-control " type="text" placeholder="Mohsin">-->
                                <!--                    </div>-->
                                <!--                    <div class="form-group">-->
                                <!---->
                                <!--                        <input class="form-control " type="text" placeholder="Irshad">-->
                                <!--                    </div>-->
                                <div class="form-group">
                                    <h>請輸入內文</h>
                                    <textarea rows="2" class="form-control"  name="content"></textarea>
                                    <h>請輸入編碼</h>
                                    <input type="text" name="number" value="<?php echo $x;?>">


                                </div>
                            </div>
                            <div class="modal-footer ">
                                <button type="submit" name="button"  class="btn btn-warning btn-lg" style="width: 100%;"> Update</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>




                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                                        class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                            </div>
                            <div class="modal-body">

                                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are
                                    you sure you want to delete this Record?
                                </div>

                            </div>
                            <div class="modal-footer ">
                                <a class="btn btn-large btn-warning" href="contentDelete.php?number=<?php echo $content['number']  ?>">Yes</a>
                                <!--                            <button type="button" class="btn btn-success" href="contentDelete.php?number=--><?php //echo $content['number']; ?><!--"><span class="glyphicon glyphicon-ok-sign"></span> Yes-->
                                <!--                            </button>-->
                                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                                        class="glyphicon glyphicon-remove"></span> No
                                </button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </form>

            <?php
        }
    }
    ?>
    <a style="margin-left: 200px" class="btn btn-large btn-warning" href="contentaddFrame.php">新增資料</a>
    <?php
}else{
    echo "You don't have permission to access this site.";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index2.php>';
}
?>
</body>
</html>
