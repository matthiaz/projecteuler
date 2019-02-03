<?php

/* 
 * 

A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,
a2 + b2 = c2

For example, 32 + 42 = 9 + 16 = 25 = 52.

There exists exactly one Pythagorean triplet for which a + b + c = 1000.
Find the product abc.

 */
for($i_a=1;$i_a<1000;$i_a++) {
	for($i_b=$i_a;$i_b<1000;$i_b++) {//B should be at least A 
		$i_c = 1000-$i_b-$i_a;//no need to loop through C, because we KNOW the sum is 1000
		if($i_c>$i_b && (pow($i_a, 2) + pow($i_b, 2))==pow($i_c, 2) ) {
			
			echo "Product = A $i_a * B $i_b * C $i_c = " . ($i_a*$i_b*$i_c);
			exit;
		}
	}
}