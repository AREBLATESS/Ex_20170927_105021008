<?php  session_start();
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/3
 * Time: 上午 08:36
 */
include ('dbConn.inc.php');
include ('fun.inc.nav.php');
$ID=$_GET['ID'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
    <!--          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"-->
    <!--          crossorigin="anonymous">-->
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
          crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="block.css">
    <title>Document</title>
</head>
<body style="background-size:100%;background-attachment:fixed;background-image: linear-gradient(to right,rgba(255,255,255,0.8),rgba(255,255,255,0.5)),url(image/background.png);">

<?php
if(isset($_SESSION['username'])){
    $query = "SELECT * FROM `paper`WHERE `ID`=$ID";
    if($result = $mysqli->query($query)){
        $row = mysqli_fetch_row($result);
        $count = $result ->num_rows;

        ?>
        <?php nav(1); ?>
        <form method="post" action="updateData.php">
            <div style="width:60%;margin:50px auto auto auto" align="center">
                <h1 >使用者清單(<?php echo $count;?>)</h1>


                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label"></label>
                    <div class="col-10">
                        <input  class="form-control" type="hidden" value='<?php echo $ID ?>' name="ID">
                    </div>
                </div>
                <!--    <div class="form-group row">-->
                <!--        <label for="example-text-input" class="col-2 col-form-label">password</label>-->
                <!--        <div class="col-10">-->
                <!--            <input class="form-control" type="text" value="" id="password">-->
                <!--        </div>-->
                <!--    </div>-->
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">author</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="" name="author">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-tel-input" class="col-2 col-form-label">title</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="" name="title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-2 col-form-label">publisher</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="" name="publisher">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-2 col-form-label">pages</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="" name="pages">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">override</button>
                    </div>
                </div>
            </div>

            <!--        /////////////////////////////////////radios////////////////////-->
            <!--            <div align="center">-->
            <!--                <div class="form-check" >-->
            <!--                    <label class="form-check-label">-->
            <!--                        <input class="form-check-input" type="radio" name="exampleRadios" name="exampleRadios1" value="1" disabled>-->
            <!--                        Operator-->
            <!--                    </label>-->
            <!--                </div>-->
            <!--                <div class="form-check">-->
            <!--                    <label class="form-check-label">-->
            <!--                        <input class="form-check-input" type="radio" name="exampleRadios" name="exampleRadios2" value="2" >-->
            <!--                        Teacher-->
            <!--                    </label>-->
            <!--                </div>-->
            <!--                <div class="form-check disabled">-->
            <!--                    <label class="form-check-label">-->
            <!--                        <input class="form-check-input" type="radio" name="exampleRadios" name="ampleRadios3" value="3" checked>-->
            <!--                        Student-->
            <!--                    </label>-->
            <!--                </div>-->
            <!--            </div>-->
        </form>
        <?php
    }
    else{
        echo "No such user found." . mysqli_error($mysqli。);
    }
}else{
    echo "You don't have permission to access this site.";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index2.php>';
}
?>
</body>
</html>