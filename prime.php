<h2><u>Check the given number is prime or not.</u></h2>

<?php
$num = 17;
$n = 0;

for($i = 2; $i < $num; $i++) {
  if($num % $i == 0){
    $n++;
    break;
  }
}

if ($n == 0){
  echo "  number is a prime number.";
  } 
else {
  echo "number is not a prime number.";
}

?>