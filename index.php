<?php
$arr = array(1,2,3,55,77,12);
function test($arr){
	$len = count($arr);
	for($i=1;$i<$len;$i++){
		for($k=0;$k<$len - $i;$k++){
			if($arr[$k] > $arr[$k+1]){
				$tmp = $arr[$k+1];
				$arr[$k+1] = $arr[$k];
				$arr[$k]   = $tmp;
			}
		}
	}
	return $arr;
}

var_dump(test($arr));



	