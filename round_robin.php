<?php

function round_robin($burst_time,$n,$quantum_time,$time,$arr_time,$turn_around_time,$waiting_time,$count){
		
		for ($i=0; $i < $n ; $i++) {
			if ($arr_time < $time) {
				continue;
			}else{
				if ($arr_time > $time) {
					if ($burst_time[$i] > $quantum_time) {
					$time = $time + $quantum_time;
					echo "time1 -".$time."<br>";
					// echo "before -".$burst_time[$i]."<br>";
					$burst_time[$i] = $burst_time[$i] - $quantum_time;
					echo "second_burst -".$burst_time[$i]."<br>";
				}else{
					$time = $time + $burst_time[$i];
					echo "time2 -".$time."<br>";
					// echo "below before -".$burst_time[$i]."<br>";
					$burst_time[$i] = 0;
					echo "second_burst -".$burst_time[$i]."<br>";
				}if($burst_time[$i] == 0){
					echo "arraival_time - ".$arr_time[$i]."<br>";
					$turn_around_time = $time - $arr_time[$i];
					$waiting_time[$i] = $time - $burst_time[$i];
					echo "time3 - ".$time." <br>";
					echo "turn_around_time - ".$turn_around_time."<br>";
					echo "waiting_time - ".$waiting_time[$i]."<br>";
				}if ($i == $n - 1) {
					
				}	
				}
			}
		}
		
}

$turn_around_time = 0 ;
$arr_time = [5,4,3,1,2,6];
$burst_time = [5,6,7,9,2,3];
$waiting_time = array();

$n = count($burst_time);
$time = 0;
$quantum_time = 3;
$count = 0;

round_robin($burst_time,$n,$quantum_time,$time,$arr_time,$turn_around_time,$waiting_time,$count);

// print_r($waiting_time);
?>