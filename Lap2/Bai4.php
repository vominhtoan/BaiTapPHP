<?php
    $m = rand(2,5);
    $n = rand(2,5);

    echo("Mảng được tạo có kích thước $m x $n: <br>");

    for ($a=0; $a < $m; $a++) { 
                    for ($b=0; $b < $n; $b++) { 
                        $array[$a][$b] = rand(-100, 100);
                    }
                }

    for ($a=0; $a < $m; $a++) 
    { 
        echo "<br>";  
        for ($b=0; $b < $n; $b++) 
        { 
            echo $array[$a][$b]."  ";
        }
    }
?>