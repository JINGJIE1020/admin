<?php 

// 1. 1-100和
// $n = 100;
// $sum = ($n+1)*($n/2);
// echo $sum;

// 2. 1-100和
// $sum = 0;
// for ($i = 1; $i <= 100; $i++) { 
// 	$sum+= $i ;
// }
// echo $sum;

// 3. 1-100和
// $arr = array();
// function he($n){
// 	for ($i = 1; $i <= 100 ; $i++) { 
// 		$arr[$i] = $i;
// 	}
// 	return $arr;
// }
// $n = 100;
// $sum = array_sum(he($n));
// var_dump($sum);


// 阶乘递归
// function jie($n){
// 	if($n>1){
// 		$sum = $n*jie($n-1);
// 	}else{
// 		$sum = 1;
// 	}
// 	return $sum;
// }
// $n = 5;
// $sum = jie($n);
// echo $sum;

// 阶乘循环
// function jie($n){
// 	$arr = array();
// 	for ($i = $n; $i >=1 ; $i--) { 
// 		$arr[$i] = $i;
// 	}
// 	return $arr;
// }
// $n = 5;
// $arr = jie($n);
// var_dump($arr);


// 回文
$str = '123454321';
$stra = array();
$strb = array();
for ($i = 0 ; $i < strlen($str); $i++) { 
	$stra[$i] = $str[$i];
}
$strb = array_reverse($stra);
if($stra==$strb){
	echo '是回文字符串';
}else{
	echo '不是回文字符串';
}








 ?>