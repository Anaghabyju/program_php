
<h2><u>check if all characters in the string are unique</u></h2>

<?php
function uniqueCharacters($str)
{
    for($i = 0; $i < strlen($str); $i++)
    {
        for($j = $i + 1; $j < strlen($str); $j++)
        {
            if($str[$i] == $str[$j])
            {
                return false;
            }
        }
    }
     return true;
}

$str = "calculator";
 if(uniqueCharacters($str))
{
    echo " true, because all characters in the string word are unique.";
}
else
{
    echo " false,The String ", $str, " has duplicate characters";
}
 ?>