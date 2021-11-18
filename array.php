<?php

//create an array
$t = array(12,11,13,14,8,6,15,2);

// a function that print all elements from the array
function print_array($t)
{
  for ($i=0; $i < count($t); $i++) {
    echo $t[$i] . ", ";
  }
}
echo "Elements: [";
echo print_array($t)."] <br>";

// a function that calculates the average of an array
function average($t) {
    $sum = 0;
    for ($i = 0; $i < count($t); $i++) {
        $sum += $t[$i];
    }
    $average = $sum / count($t);
    return $average;
}
echo "The average is: " . average($t) . "<br>";

// a function that print number of elements superior to the average
function superior($t, $number) {
    $count = 0;
    for ($i = 0; $i < count($t); $i++) {
        if ($t[$i] > $number) {
            $count++;
        }
    }
    return $count;
}
echo "Number of elements superior: " . superior($t, 10) . "<br>";

// a function that print if a number exist
function exist($t, $number) {
    for ($i = 0; $i < count($t); $i++) {
        if ($t[$i] == $number) {
            return true;
        }
    }
    return false;
}
echo exist($t, 20) ? "The number exist." : "The number doesn't exist.";

// binary search function
function binary_search($t, $number) {
    $low = 0;
    $high = count($t) - 1;
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        if ($t[$mid] == $number) {
            return true;
        } else if ($t[$mid] < $number) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }
    return false;
}
echo "<br><br>";

function bulb_switch($t) {
  $max = count($t) - 1;
  while ($max > 0 && $counter != 0) {
	$counter = 0;
    for ($i=0; $i < $max; $i++) {
      if($t[$i] > $t[$i+1]) {
        $counter++;
        $temp = $t[$i];
        $t[$i] = $t[$i+1];
        $t[$i+1] = $temp;
        print_array($t);echo "<br>";
      }
    }
    $max--;
  }
  return $t;
}

$tb = array(12,10,8,26,54,13,32);
bulb_switch($tb);
// print_array(bulb_switch($tb)); echo"<br>";
