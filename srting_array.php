
<h2><u>use any sorting algorithm to sort array number list</u></h2>

<?php
$n = array(40, 61, 2, 22, 13);
sort($n);

$arrlength = count($n);
for($x = 0; $x < $arrlength; $x++) {
	echo $n[$x];
	echo "<br>";
}
?>

