<?php 	
		
	$start = 123;
	$end = 999;

		for ($i = $start ; $i <= $end ; $i++) { 
		
			$num = $i;

			$ge = $num%10;
			$shi = ($num%100-$ge)/10;
			$bai = ($num-$shi*10-$ge)/100;
			$flower = $ge*$ge*$ge+$shi*$shi*$shi+$bai*$bai*$bai;

			if( $num == $flower ){
				return $num;
			}
		}

	



 ?>