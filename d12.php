<?php 

$n = 5;

$a = Sum_Solution($n);

echo $a;

function Sum_Solution($n){
	$sum = $n;

	$sum && ($sum+=Sum_Solution($n-1));

	return $sum;
}





 ?>