<h2><u>Inverted Right Half Pyramid Pattern</u></h2>
<?php
$n=6;
for($i=1; $i<=$n; $i++) 
{
for($j=1; $j<=$i; $j++) 
{
echo '&nbsp;&nbsp;';
}
for($k=5; $k>=$i; $k--) 
{
echo '*';
}
echo '<br>';
}
?>