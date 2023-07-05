
<h2><u>write a  php program if an array is [1,2,4,32,12,6,8] and the biggest number is 32 and the smallest number is 1</u></h2>

<?php
function findLargestSmallest($arr) {
    $largest = $arr[0];
    $smallest = $arr[0];

    foreach ($arr as $num) {
        if ($num > $largest) {
            $largest = $num;
        }

        if ($num < $smallest) {
            $smallest = $num;
        }
    }
 return ['largest' => $largest, 'smallest' => $smallest];
}

$numbers = [1, 2, 4, 32, 12, 6, 8];
$result = findLargestSmallest($numbers);

echo "The largest number =". $result['largest'],'<br>';
echo "The smallest number =" . $result['smallest']; 
?>