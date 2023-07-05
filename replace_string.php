
<h2><u>replace every space in the sentence with "--"and return the string</u></h2>

<?php
$str = "I am a doctor";
for ($i = 0; $i < strlen($str); ++$i)
{
	if ($str[$i] == ' ')
	{
		$str[$i] = '-';
	}
}
echo $str . "\n";
?>