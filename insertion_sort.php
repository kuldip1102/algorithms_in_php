<?php 
	$insertion = [5,1,8,7,3,2,11,20,6];
	$n = count($insertion);

// 	procedure insertionSort( A : array of items )
//    int holePosition
//    int valueToInsert
	
//    for i = 1 to length(A) inclusive do:
	
//       /* select value to be inserted */
//       valueToInsert = A[i]
//       holePosition = i
      
//       /*locate hole position for the element to be inserted */
		
//       while holePosition > 0 and A[holePosition-1] > valueToInsert do:
//          A[holePosition] = A[holePosition-1]
//          holePosition = holePosition -1
//       end while
		
//       /* insert the number at hole position */
//       A[holePosition] = valueToInsert
      
//    end for
	
// end procedure

	// $element;

	// $sorted_array = [];
		for ($i=0; $i < $n; $i++) { 
		$value = $insertion[$i];
		$position = $i-1;

		while ($position >= 0 && $insertion[$position] > $value) {
			$insertion[$position +1] = $insertion[$position];
			$position = $position -1;
		}
		$insertion[$position + 1] = $value;
	}

foreach ($insertion as $value) {
	echo $value."<br>";
}
?>