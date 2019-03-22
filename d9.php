<?php 	

$numbers = ['3','32','321'];

function PrintMinNumber($numbers){

	$count = count($numbers);
	$flag = 0;
	for ($i=1; $i < $count ; $i++) { 
		for ($j=0; $j < $count-1 ; $j++) { 
			if($numbers[$j] < $numbers[$j+1]){
				$flag = 1;
				$temp = $numbers[$j];
				$numbers[$j] = $numbers[$j+1];
				$numbers[$j+1] = $temp;
			}
		}
		if($flag == 0){
			return $numbers; 
		}
	}
	return $numbers;
}
$a = PrintMinNumber($numbers);
$num = implode('',$a) ;
echo $num;



 ?>