<h2><u>Program to print the sum of digits.</u></h2>
<?php
   $number=123;
   $sum=0;
   while($number>0)
   {
     $sum=$sum+$number%10;
     $number/=10;
   }
    echo"sum of digit 123 = $sum";
?>