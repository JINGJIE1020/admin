<?php 

$array = [6,2,4,7,9];

$sum = 10;

$res = FindNumbersWithSum($array, $sum);

echo $res;

function FindNumbersWithSum($array, $sum){

	$low = 0;

	$height = count($array)-1;

	$count = count($array);

	for ($i=0; $i < $count; $i++) { 
		if($array[$height]+$array[$low]==$sum){
			break;
		}elseif($array[$height]+$array[$low]>$sum){
			$height--;
		}else{
			$low++;
		}
	}
	return $array[$height].','.$array[$low];
}




//先规定好一个sum（如10）
//再全部列出相加等于10的两个数（1和9、2和8、3和7、4和6、5和5）
//然后看看提供的数组array里面有没有他们（必须是一组，即有1并且有9，有2并且有8，依次...）
//有的话就输出，如果有两组并且两组以上的就再计算出他们分别的乘积，再进行比较


// $array = [6,2,4,7,9];

// $sum = 10;

// $res = FindNumbersWithSum($array, $sum);

// var_dump($res);

// function FindNumbersWithSum($array, $sum){

// 	$num1 = 0;

// 	$num2 = $sum;

// 	$arr = array();

// 	for ($i=1; $i < $sum; $i++) { 
// 		$arr[$i]=$sum-$num1;
// 		$num1++;
// 	}
// 	echo $arr;

// }



















 ?>