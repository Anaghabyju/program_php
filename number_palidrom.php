<h2><u>check the given number is palidrom or not</u></h2>
 <?php
 $a=1221;
 $x=0;
 $n=$a;
 while(floor($a))
 {
    $b=$a%10;
    $x=$x*10+$b;
    $a=$a/10;
 }
 if($n==$x){
    echo "the given number  is a palidrome";
 }
 else{
    echo "the given number  is not a palidrome";
 }
 ?>