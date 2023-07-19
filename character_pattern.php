<h2><u>character pattern</u></h2>
<?php 
$n=65;
for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
        echo chr($n). "&nbsp;&nbsp;&nbsp;";
    }
   
    echo "<br />";
}
?>
 <br><br>
 <?php 
$n=65;
for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
        echo chr($n). "&nbsp;&nbsp;&nbsp;";
    }
   $n=$n+1;
    echo "<br />";
}
?>

<br><br>
 <?php 
$n=65;
for($i=0;$i<=5;$i++){
    for($j=0;$j<=$i;$j++){
        echo chr($n). "&nbsp;&nbsp;&nbsp;";
        $n=$n+1;
    }
  
    echo "<br />";
}
?>