<?php 

function CountSteps($x,$y){
	if($x==1 || $y ==1){
		return 1;
	}else{
		$num = CountSteps($x-1,$y)+CountSteps($x,$y-1);
		return $num;
	}
}
$x = 2;
$y = 2;
$num = CountSteps($x,$y);
echo $num;


 ?>