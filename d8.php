<?php 	

$arr = ['12','5','27','8','16','10','2','3'];
function LastRemaining_Solution($arr){
		$count = count($arr);
		$flag = 0;
		for ($i=1; $i < $count ; $i++) { 
			for ($j=0; $j < $count-$i ; $j++) { 
				if($arr[$j]>$arr[$j+1]){
					$flag = 1;
					$temp = $arr[$j];
					$arr[$j] = $arr[$j+1];
					$arr[$j+1] = $temp;
				}
				
			}
			if($flag == 0){
				break;
			}
		}
		return $arr;
}
$a = LastRemaining_Solution($arr);
var_dump($a);



 ?>