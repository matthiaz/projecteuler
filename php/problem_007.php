<?php

/* 
 * 

By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.

What is the 10 001st prime number?

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

$intPosition=1;
$intCurrentPrime=1;
$intXthePrimeToSearchFor = 10001;
while($intPosition++!=$intXthePrimeToSearchFor) {
	$intCurrentPrime = nextPrime($intCurrentPrime+1);	
	echo "$intPosition = $intCurrentPrime ".PHP_EOL;
}
echo "The prime number at position $intXthePrimeToSearchFor = $intCurrentPrime";
