<h2><u> Program to print the average of n numbers.</u></h2>
<?php
$a = 0;
$b = 10;
$total = 0;
$count = ($b - $a) + 1;
$average = 0;

echo "Average of numbers between $a and $b: <br>";
for($a=0; $a<=$b; $a++)
 $total += $a;

echo "<br> Total = $total";
echo "<br> Count = $count";
$average = $total / $count;
echo "<br> Average is $average";
?>