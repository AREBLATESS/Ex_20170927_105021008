<?php session_start();
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/12/27
 * Time: 上午 12:41
 */
include('fun.inc.nav.php');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>
    <title>Arbee L.P. Chen's Conference Paper</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">
</head>
<body style="background-size:100%;background-attachment:fixed;background-image: linear-gradient(to right,rgba(255,255,255,0.8),rgba(255,255,255,0.5)),url(image/background.png);">
<?php nav(1) ?>

<div align="center" style="margin: 100px 200px auto 200px">
    <h class="title">
        Arbee的<br>
        研討會論文<br>
    </h>
</div>

<div id="accordion" align="center" style="width: 60%;margin-top: 50px">
    <h3>Number 1</h3>
    <div>
        <p>
            A Data-driven Framework on Mining Relationships between Air Quality and Cancer Diseases
            International Conference on Data Science, Technology and Applications
            Madrid, Spain，2017.7.24 ~ 2017.7.26
            、、陳良弼
        </p>
    </div>
    <h3>Number 2</h3>
    <div>
        <p>
            Finding the Shortest Path with User Requirements
            International Conference on Data Mining, Communications and Information Technology
            Phuket, Thailand，2017.5.25 ~ 2017.5.27
            、陳良弼
        </p>
    </div>
    <h3>Number 3</h3>
    <div>
        <p>
            Mining User Trajectories from Smartphone Data Considering Data Uncertainty
            International Conference on Big Data Analytics and Knowledge Discovery - DaWaK 2016
            Porto, Portugal，2016.9.4 ~ 2016.9.9
            、、陳良弼
        </p>
        <!--        <ul>-->
        <!--            <li>List item one</li>-->
        <!--            <li>List item two</li>-->
        <!--            <li>List item three</li>-->
        <!--        </ul>-->
    </div>
    <h3>Number 4</h3>
    <div>
        <p>
            Mining Event Sequences from Social Media for Election Prediction
            Industrial Conference on Data Mining
            Newark, NJ, USA，2016.7.12 ~ 2016.7.17
            、、陳良弼
        </p>
    </div>
    <h3>Number5</h3>
    <div>
        <p>
            "A framework for enabling user preference profiling through Wi-Fi logs"
            IEEE International Conference on Data Engineering
            Helsinki, Finland，2016.5.16 ~ 2016.5.20
            范耀中、陳良弼
        </p>
    </div>
    <h3>Number6</h3>
    <div>
        <p>
            "Determining Top-K Candidates by Reverse Constrained Skyline Queries"
            International Conference on Data Management Technologies and Applications
            Colmar,Alsace, France，2015.7.20 ~ 2015.7.22
            鄭瑞賢、陳良弼
        </p>
    </div>
    <h3>Number7</h3>
    <div>
        <p>
            "Finding Maximal Quasi-cliques Containing a Target Vertex in a Graph"
            International Conference on Data Management Technologies and Applications，2015
            周元亨、陳良弼
        </p>
    </div>
    <h3>Number8</h3>
    <div>
        <p>
            "Finding Targets with the Nearest Favor Neighbor and Farthest Disfavor Neighbor by a Skyline Query"
            ACM Symposium on Applied Computing
            Gyeongju, Republic of Korea，2014.3.24 ~ 2014.3.28
            Yi-Wen Lin、陳良弼
        </p>
    </div>
    <h3>Number9</h3>
    <div>
        <p>
            "On the Semantic Annotation of Daily Places: A Machine-Learning Approach"
            ACM International Conference on Information and Knowledge Management，2014
            Chih-Wei 張、陳良弼
        </p>
    </div>
    <h3>Number10</h3>
    <div>
        <p>
            "On Continuous Spatial Skyline Queriesover a Line Segment"
            International Conference on Database and Expert Systems Applications，2014
            Wei Heng Tai、陳良弼
        </p>
    </div>
    <h3>Number11</h3>
    <div>
        <p>
            “Anonymization for Multiple Released Social Network Graphs"
            Pacific-Asia Conference on Knowledge Discovery and Data Mining
            Gold Coast, Australia，2013.4.14 ~ 2014.4.17
            林王智瑞、陳良弼
        </p>
    </div>
    <h3>Number12</h3>
    <div>
        <p>
            "Verification of k-Coverage on Query Line Segments"
            International Database Engineering & Applications Symposium，2013
            莊坤翰、陳良弼
        </p>
    </div>
    <h3>Number13</h3>
    <div>
        <p>
            "Efficient Time Series Disaggregation for Non-intrusive Appliance Load Monitoring"
            IEEE International Conference on Ubiquitous Intelligence and Computing，2012
            范耀中、陳良弼
        </p>
    </div>
    <h3>Number14</h3>
    <div>
        <p>
            "On Continuous Top-k Similarity Joins''
            International Conference on Data Technologies and Applications，2012
            D.J. Li、陳良弼
        </p>
    </div>
    <h3>Number15</h3>
    <div>
        <p>
            "Discovering leaders from social network by action cascade"
            EuroSys Workshop on Social Network Systems，2012
            M.F. Tsai、陳良弼
        </p>
    </div>
    <h3>Number16</h3>
    <div>
        <p>
            "Finding Leaders with Maximum Spread of Influence through Social Networks"
            International Computer Symposium，2012
            葉崇安、陳良弼
        </p>
    </div>
    <h3>Number17</h3>
    <div>
        <p>
            Dynamic Skylines Considering Range Queries
            International Conference on Database Systems for Advanced Applications，2011
            W.C. Wang、陳良弼
        </p>
    </div>
    <h3>Number18</h3>
    <div>
        <p>
            "A Better Strategy of Discovering Link-Pattern Based Communities by Classical Clustering Methods"
            Pacific-Asia Conference on Knowledge Discovery and Data Mining，2010
            林真伊、陳良弼
        </p>
    </div>
    <h3>Number19</h3>
    <div>
        <p>
            "Continuous Probabilistic Skyline Queries over Uncertain Data Streams"
            International Conference on Database and Expert Systems Applications，2010
            Hui Zhu Su、陳良弼
        </p>
    </div>
</div>



<!--        <div align="center" style="margin: 100px 200px auto 200px">-->
<!--            <h class="title">-->
<!--                Arbee 的 研討會論文-->
<!--            </h>-->
<!--            <div class="paper1">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                       1-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!---->
<!--            <div class="paper2">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                        2-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!--            <div class="paper1">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                       3-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!---->
<!--            <div class="paper2">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                       4-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!--            <div class="paper1">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                        5-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!---->
<!--            <div class="paper2">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                        6-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!--            <div class="paper1">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                        7-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!---->
<!--            <div class="paper2">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                        8-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!--            <div class="paper1">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                        9-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!---->
<!--            <div class="paper2">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                        10-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!--            <div class="paper1">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                        11-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!---->
<!--            <div class="paper2">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                        12-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!--            <div class="paper1">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                        13-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!---->
<!--            <div class="paper2">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                        14-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!--            <div class="paper1">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                        15-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!---->
<!--            <div class="paper2">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                        16-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!--            <div class="paper1">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                       17-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!--            <div class="paper2">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                        18-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!--            <div class="paper1">-->
<!--                <h class="paper">-->
<!--                    <pr>-->
<!--                        19-->
<!--                    </pr>-->
<!--                </h>-->
<!--            </div>-->
<!--        </div>-->

</body>
<footer class="footer">亞洲大學 powered by AREBLATESS</footer>
</html>
