<?php 
	

	function binary_sort($arr,$l,$r,$element){

			if ($r > $l ) {
	
			$mid = $l + ($r - $l)/2;
			// var_dump($mid);

			if ($element == $arr[$mid]) {
				return floor($mid);
			}

			if ($arr[$mid] > $element ) {
				return binary_sort($arr,$l,$mid-1,$element);			
			}else{
				return binary_sort($arr,$mid+1,$r,$element);
			}
		}
		return -1;
	}

	$binary = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50];
	$l = 0;
	$r = count($binary);
	$element = 36;	

	$result = binary_sort($binary,$l,$r-1 ,$element);

	var_dump($result);
	if ($result == -1) {
		echo "Element is not present in array";
	}else{
		echo "Element is present in array ". $result;
	}
?>