<?php 
	
	
	function arrange_heap(&$array,$i,$n){
		$left = 2 * $i ;
		$right = 2 * $i + 1 ;

		echo "<pre>";
			
			// print_r($array);
		echo "<pre>";

		if ($left < $n && $array[$left] > $array[$i]) {
			$largest = $left;
		}else{
			$largest = $i;
		}

		if ($right < $n && $array[$right] > $array[$largest]) {
			$largest = $right;
		}
		if ($largest != $i) {
			// echo $i;
			// echo $largest;
			$temp = $array[$i];
			$array[$i] = $array[$largest];
			$array[$largest] = $temp;

			arrange_heap($array,$largest,$n);
		}

	}

	

	function heapsort(&$heap){
		$n = count($heap) ;
		var_dump($n);

		for ($i = ($n - 1)/2  ; $i >= 0 ; $i--) { 
			arrange_heap($heap,$i,$n);
		}

		for ($j=$n - 1 ; $j > 0 ; $j--) { 
			# code...
			$temp = $heap[$j];
			$heap[$j] = $heap[0];
			$heap[0] = $temp;

			$n--;

			arrange_heap($heap,0,$n);
		}
		

		// print_r($heap);
		
	}

	$heap = [5,1,8,7,3,2,11,20,6];
	heapsort($heap);
	foreach ($heap as $value) {
		echo $value."<br>";
	}

?>