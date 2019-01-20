<?php

/* 
 * The sum of the squares of the first ten natural numbers is,
12 + 22 + ... + 102 = 385

The square of the sum of the first ten natural numbers is,
(1 + 2 + ... + 10)2 = 552 = 3025

Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 − 385 = 2640.

Q: Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
 */

function squared($i) {
	return $i*$i;
}

$arrNumbers = range(1,100);
$sum_of_squares = array_sum(array_map('squared', $arrNumbers));
$square_of_sum = squared(array_sum($arrNumbers));
$diff = $square_of_sum - $sum_of_squares;
echo "The diff between square of sum $square_of_sum and sum of squares $sum_of_squares = $diff";