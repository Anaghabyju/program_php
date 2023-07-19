<h2><u>number patterns</u></h2>


<?php 
$n=1;
for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
        echo "$n &nbsp;&nbsp";
    }
    echo "<br />";
}
?>
<br><br>

<?php 
$n=1;
for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
        echo "$n &nbsp;&nbsp";
    }
    $n= $n+1;
    echo "<br />";
}
?>


<br><br>

<?php 
$n=1;
for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
       echo "$n &nbsp;&nbsp";
       $n= $n+1;
    }
    
    echo "<br />";
}
?>