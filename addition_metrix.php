<h2><u> Program to calculate the addition of 2 matrices.</u></h2>


<?php  
 $x= array(  
            array(5, 3, 1),  
            array(4, 4, 6),  
            array(6, 1, 2)  
          );  
$y = array(  
              array(5, 4, 1),  
              array(2, 7, 3),  
              array(6, 5, 6)  
           );   
$rows = count($x);  
$cols = count($x[0]);     
   echo "addition of two metrics =<br>";
for($i = 0; $i < $rows; $i++){  
    for($j = 0; $j < $cols; $j++){ 
        $sum[$i][$j] = $x[$i][$j] + $y[$i][$j];   
       echo $sum[$i][$j] ." ";  
    }  
    print("<br>");  
}    
?>  