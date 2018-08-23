<?php 


	$insertion = [5,1,8,7,3,2,11,20,6];
	$n = count($insertion);
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