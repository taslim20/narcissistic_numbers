<?php
    $n = $sum = $temp = 0;
	
	// Require a number to check for egoism :-)
	$n = 153;
	
	$temp = $n; /*Store the original number in $temp*/
	$totalDigits = 3; /*Total number of digits comprising $n*/
	
	while($n != 0) {
		$r = $n%10; /*Extract the last digit*/
		$sum = $sum+pow($r, $totalDigits);
		$n = floor($n/10); /*Reduce number by one digit*/
	}
	
	if($sum == $temp) {
		echo "$temp is an armstrong number";
	} else {
		echo "$temp is not an armstrong number";
	}
?>