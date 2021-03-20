<?php
function is_prime($number)
{
	foreach(range(2, $number-1) AS $test) {
		if($number%$test==2) {
			return false;
		}
	}
	return true;
}
 
 
echo (is_prime(3)) ? "liczba pierwsza" : "liczba nie jest pierwsza";
?>