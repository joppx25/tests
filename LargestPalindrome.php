<?php
	$currentLargestPalindrome = 0;
	for ($i = 999; $i > 100; $i--) {
		for ($x = 999; $x > 100; $x--) {
			$product = $i * $x;
			$reverse = (int)strrev((string)$product);
			if ($product === $reverse) {
				$currentLargestPalindrome = $currentLargestPalindrome < $product ? $product : $currentLargestPalindrome;
			}
		}
	}
	echo "The largest palindrome made from the product of two 3-digit numbers is $currentLargestPalindrome";
?>