<?php 

num();
function num($num1=78,$num2=46){
	while ($num2!=0) {
		$temp = $num1^$num2;
		$num2 = ($num1&$num2)<<1;
		$num1 = $temp;
	}
	echo $num1;
}

 ?>