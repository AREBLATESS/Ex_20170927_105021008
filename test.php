<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 11:05
 */

$n=$_POST['n'];
$m=$_POST['m'];
$r=$_POST['r'];
$g=$_POST['g'];
$b=$_POST['b'];

                    echo "<table border='1'>";
                    for($i=1;$i<=$n;$i++){
                        echo "<tr>";
                        for($j=1;$j<=$m;$j++){
                            echo "<td style='text-align: center; width: 30px;background-color:chartreuse;colo:rgb($r,$g,$b)'><span style='font-size: 2em;'>".$i*$j."</span></td>";
                        }
                        echo"</tr>";
                    }
