<?php 
// 1.
// $arr = [1,2,3,4];
// $res = mathNum($arr);
// var_dump($res);
// echo count($res);
// function mathNum($arr){
// 	$result = [];
// 	$len = count($arr);
// 	for ($i=0; $i < $len; $i++) { 
// 		for ($j=0; $j < $len; $j++) { 
// 			for ($k=0; $k < $len; $k++) { 
// 				if($arr[$i]!=$arr[$j] && $arr[$i]!=$arr[$k] && $arr[$j]!=$arr[$k]){
// 					$result[] = $arr[$i].$arr[$j].$arr[$k];
// 				}
// 			}
// 		}
// 	}
// 	return $result;
// }

// 2.
// class Db{
// 	private static $_instance = null;
// 	private function __construct(){

// 	}
// 	private function __clone(){

// 	}
// 	public static function getInstance(){
// 		if(!(self::$_instance instanceof Db)){
// 			self::$_instance = new Db();
// 		}
// 		return self::$_instance;
// 	}
// }


// 3.
// $dir = 'D:\WAMP\phpstudy\PHPTutorial\WWW';
// my_dir($dir);
// function my_dir($dir){
// 	$handle = opendir($dir);
// 	while (($file=readdir($handle))!==false) {
// 		if($file=='.' || $file=='..'){
// 			continue;
// 		}
// 		$filePath = $dir.'/'.$file;
// 		if(is_dir($filePath)){
// 			fun($filePath);
// 		}else{
// 			echo $filePath."\r\n";
// 		}
// 	}
// 	closedir($handle);
// }



// 4.
$aPath = '/a/b/c/d/test.php';
$bPath = '/a/b/d/c/test.php';
$a = findCommonPath($aPath,$bPath);
var_dump($a);
function findCommonPath($aPath,$bPath){
	$result = [];
	$aArr = explode('/', $aPath);
	$bArr = explode('/', $bPath);
	$len = count($aArr)>count($bArr)?count($bArr):count($aArr);

	for ($i=0; $i < $len; $i++) { 
		if($aArr[$i] == $bArr[$i]){
			$result[$i] = $aArr[$i];
		}else{
			break;
		}
	}
	$str = implode('/', $result);
	return $str;
}








 ?>