<?php
/**
 * This function calculates
 * and returns the factorial
 * of provided positive integer
 * number.
 *
 * @param Int $number Integer input
 * @return Int Factorial of the input
 */
function factorial(int $number): int
{
    if ($number < 0) {
        throw new \Exception("Negative numbers are not allowed for calculating Factorial");
    }
    if ($number === 0) {
        return 1; // Factorial of 0 is 1
    }
    return ($number * factorial($number - 1)); // Recursion since x! = x * (x-1)!
}
