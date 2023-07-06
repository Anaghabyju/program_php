<h2><u>Program to print all prime numbers between 1 to 100.</u></h2>

<?php  
$a=0;  
$n=0;  
$i=1;  
$j=1;  
while($n<25)  
{  
$j=1;  
$a=0;  
while($j<=$i)  
{  
if($i%$j==0)  
$a++;  
$j++;   
}  
if($a == 2)  
{  
echo $i;  
echo " ";  
$n++;  
}  
$i++;  
}  
?>  