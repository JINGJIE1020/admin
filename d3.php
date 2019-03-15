<?php 
	
	class Demo{

		//非递归
		// static public function fbnq($n){
		// 	if($n <= 0){
		// 		return 0;
		// 	}

		// 	$array[1] = $array[2] = 1;
		// 	for($i = 3 ; $i <= $n ; $i++){
		// 		$array[$i] = $array[$i-1] + $array[$i-2];
		// 	}
		// 	return implode('<br>', $array);
		// }




		//递归
		static $arr = array();
		static public function fbnq($n,$i=1){
			if($i==1 || $i==2){
				self::$arr[$i] = 1;
			}else{
				self::$arr[$i] = self::$arr[$i-1]+self::$arr[$i-2];
			}
			$i++;
			if($i<=$n){
				return self::fbnq($n,$i);
			}else{
				return implode('<br>', self::$arr);
			}

		}


	}

	$n = 20;
	$demo = new Demo;
	echo $a = $demo::fbnq($n);

 ?>






 <!-- 递归就是自身调用自身，首先非递归用了数组，数组第一个和第二个都是1，从第三个开始循环，让 这个数 = 这个数前一个 与 这个数前两个的和 -->

 <!-- 递归做到自己调用自己，同样是用到数组 -->