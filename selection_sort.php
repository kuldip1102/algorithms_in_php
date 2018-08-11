<?php
	$select_sort = [5,1,8,7,3,2,11,20,6];
	$n = count($select_sort);


	for ($i=0; $i < $n-1 ; $i++) { 
		$min = $i;

		for ($j=$i+1; $j < $n ; $j++) { 
			
			if ($select_sort[$j] < $select_sort[$min]) {
				$min = $j;
			}

		}

		list($select_sort[$min],$select_sort[$i]) = array($select_sort[$i],$select_sort[$min]);

	}

foreach ($select_sort as $value) {
	echo $value."<br>";
}

	
?>