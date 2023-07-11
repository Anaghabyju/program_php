<h2><u> Right Half Pyramid Pattern</u></h2>
<?php
    $a = 5;
    for($i = 0; $i < $a; $i++) 
    {
        for($j = 1; $j < $a - $i; $j++)
         {
            echo "&nbsp;&nbsp;";
        }
        for($k = 0; $k <= $i; $k++)
         {
            echo "*";
        }
        echo "<br>";
    }
?>