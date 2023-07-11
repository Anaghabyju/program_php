<h2><u>Full Pyramid Pattern</u></h2>
<?php

$a = 5;
for($i=1;$i<=$a;$i++){
    for($j=1;$j<=$a-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
                echo "*&nbsp;&nbsp;";
    }
echo "<br />";
}
?>


