<h2><u>  Program to print the largest element present in an array  </u></h2>


<?php
$a = array(18, 30, 14, 36, 23);
$b = $a[0];
$c = count($a);
for ($i = 0; $i < $c; $i++) {
    if ($a[$i] > $b)
        $b = $a[$i];
}
echo "Largest element = $b";
?>