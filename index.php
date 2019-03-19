<?php 

function calFn($n,$m){
	$arr = array();
	for($i = $n;$i <= $m;$i++){
		$arr[$i] = $i;
	}
	return implode('',$arr);
	
}
$n = 1;
$m = 13;
$arr = calFn($n,$m);
$num = substr_count($arr, '1');
echo $num;

 ?>