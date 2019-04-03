<?php 

function zheban($array,$n){
	$count = count($array);
	while ($count>1) {
		$half = ceil($count/2);
		if($n == $array[$half]){
			foreach ($array as $key => $value) {
				if($n == $value){
					print_r($value);
					return $key;
				}
			}
		}
		else if($n > $array[$half]){
			$len = $count-($half+1);
			$start = $half+1;
			$array = array_splice($array, $start,$len);
			return zheban($array,$n);
		}
		else if($n < $array[$half]){
			$array = array_splice($array,0,$half);
			return zheban($array,$n);
		}
	}
}

$array = [1,3,6,8,10,24,35,36,50];
$n = 8;
$a = zheban($array,$n);
var_dump($a);



 ?>