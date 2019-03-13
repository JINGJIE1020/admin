<?php 


	$str = 'Have you ever gone shopping and';
	$num = strlen($str);
	for ($i = 0 ; $i < $num ; $i++) { 
		$count = 0;
		for ($j = 0; $j < $num; $j++) { 
			if($str[$i] == $str[$j]){
				$count++;
			}
			if($count == '3'){
				echo $str[$i];
				die;
			}
		}
	}


 ?>