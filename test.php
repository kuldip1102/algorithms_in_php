<?php
function build_heap(&$array, $i, $t){
  $tmp_var = $array[$i];
  $j = $i * 2 + 1;
  echo "<br>";
    print_r($tmp_var);
    print_r($i);
    print_r($t);
    print_r($j);
    print_r($array[$j]);
  echo "<br>";

  while ($j <= $t)  {
   if($j < $t)
    if($array[$j] < $array[$j + 1]) {
     $j = $j + 1; 
   }
   if($tmp_var < $array[$j]) {
    $array[$i] = $array[$j];
    $i = $j;
    $j = 2 * $i + 1;
  } else {
    $j = $t + 1;
  }
}
$array[$i] = $tmp_var;
}

 function heap_sort(&$array) {
  //This will heapify the array
  $init = (int)floor((count($array) - 1) / 2);
  // Thanks jimHuang for bug report
  for($i=$init; $i >= 0; $i--){
   $count = count($array) - 1;
   build_heap($array, $i, $count);
  }

  //swaping of nodes
  for ($i = (count($array) - 1); $i >= 1; $i--)  {
   $tmp_var = $array[0];
   $array [0] = $array [$i];
   $array [$i] = $tmp_var;
   build_heap($array, 0, $i - 1);
  }
 }

// Demo
$array = [5,1,8,7,3,2,11,20,6];
heap_sort($array);

foreach ($array as $value) {
  // echo $value."<br>";
}

?>
