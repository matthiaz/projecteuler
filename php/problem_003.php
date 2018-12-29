<?php

/* 


The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?

 */

function isPrime($number) {
	if($number % 2 === 0) {
		return false;
	}
	$i=$number;
	while(--$i > 2) {
		if($number % $i === 0) {
			return false;
		}
	}
	return true;
}

function nextPrime($starting_prime) {
	for($i=$starting_prime;;$i++) {
		if(isPrime($i)) {
			return $i;
		}
	}
}

$number			= 600851475143;
$highest_prime	= 2;

while($number > 1) {
	if($number % $highest_prime != 0) {
		$highest_prime = nextPrime($highest_prime+1);
	} else {
		$number = $number / $highest_prime;
	}
}
echo $highest_prime;

		