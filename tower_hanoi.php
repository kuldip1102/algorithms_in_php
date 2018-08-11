<?php
	// ini_set('memory_limit', '1M');
	global $step;
	function towerHanoi($disk,$source,$destination,$aux){

		if ($disk == 1) {
			echo "move disk source". $source ." to destination ".$destination."<br>";
			
		}else{
			towerHanoi($disk - 1,$source,$aux,$destination);
			towerHanoi(1 ,$source,$destination,$aux);
			towerHanoi($disk - 1 ,$aux,$destination,$source);
		}
	}
	
	towerHanoi(4,1,2,3);
	echo $step;

		
?>