<?php 


function chou($a){
	$sum = $a;
	for ($i=0; $i < $a ; $i++) { 
		if($sum%2!=0){
			break;
		}
		$sum/=2;
	}
	for ($i=0; $i < $a ; $i++) { 
		if($sum%5!=0){
			break;
		}
		$sum/=5;
	}
	for ($i=0; $i < $a ; $i++) { 
		if($sum%3!=0){
			break;
		}
		$sum/=3;
	}
	if($sum == 1){
		echo "是丑数";
	}else{
		echo "不是丑数";
	}
}

$a = 12;
$res = chou($a);



 ?>