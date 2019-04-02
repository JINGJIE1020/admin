<?php 

$n = 10;
NumberOf1($n);

function NumberOf1($n){
	$flag = 1;
	$num = 0;

	while ($flag!=0) {
		if(($n & $flag)!=0)
			$num++;
		$flag = $flag << 1;
	}
	echo $num;
}

 ?>