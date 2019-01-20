<?php
/* 

2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?

 */

$min = 1;
$max = 20;

$intNumber = 0;

while(true) {
	$intNumber++;
	//for($i=$min;$i<=$max;$i++) { //this would loop through the easy numbers 1,2,3, first... which is a waste of time
	for($i=$max;$i>=$min;$i--) { //larger numbers are harde to divide, so start with those first. 
		if($intNumber % $i !== 0) { //is number divisible
			continue 2;//get the next number, because this number is not divisible by $i.
		}
	}
	
	//we only get here if the all the numbers in the for loop are divisible
	echo "$intNumber is divisible by all numbers between $min and $max";
	break;
}