<?php
$primenumber = $_POST['number'];
$primenum = 2;
$j = 1;
echo "The prime numbers upto $primenumber are:<br>";
while ($primenum < $primenumber)
{
	$div_count=0;
	for ($i=1;$i<=$primenum;$i++)
	{
		if (($primenum%$i)==0)
		{
			$div_count++;
		}
	}
	if ($div_count<3)
	{
		echo $j.".".$primenum."<br>";
		$j = $j+1;
	}
	$primenum=$primenum+1;
}



?>