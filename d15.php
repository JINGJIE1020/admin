<?php 

$str = 'aaabbbcccXxhhffll';

FirstNotRepeatingChar($str);

function FirstNotRepeatingChar($str){

	$flag = 0;

	$arr = str_split($str);//数组

	$res = array_count_values($arr);//统计个数

	foreach ($res as $key => $value) {
		if($value == '1'){
			$s = $key;
			$flag = 1;
			break;
		}	
	}

	if($flag = 0){
		echo '-1';die;
	}

	$len = strlen($str);

	for ($i=0; $i < $len-1; $i++) { 
		if($str[$i] == $s){
			echo $i;die;
		}
	}
}

 ?>