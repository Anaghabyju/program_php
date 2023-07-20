<h2><u> Program to Reverse a Number.</u></h2>


<?php  
 
$num = 12;  
$x = 0;
$n =$num;
 
while($num>1)
{  
$mod = $num%10;
$x = $x * 10 + $mod;  
$num = $num/10;
}  
echo "Reverse of $n = $x.";
?>
