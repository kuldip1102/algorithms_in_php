<?php 

function heapBuild($array,$i,$size){
	echo "<pre>";
			print_r($array);
	echo "<pre>";
	$left = (2 * $i) ;
	$right = (2 * $i) + 1;

	if ($i < $size && $array[$left] < $array[$i]) {
		$root = $left;
	}else{
		$root = $i;
	}

	if ($i < $size && $array[$right] < $array[$i]) {
		$root = $right;
	}

	if ($root != $i) {

	}
}

function heapSort($array){
	$size = count($array);
	$mid =  floor($size/2);
	// echo $mid;
	echo $size;
	for ($i=floor($size/2); $i >= 1 ; $i--) { 
		heapBuild($array,$i,$size);
	}


}

$array = [1, 6, 3, 8, 2, 5, 4];
// print_r($array);
heapSort($array);

?>