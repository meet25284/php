<?php
// Swapping with a third variable
echo "Swapping with a third variable:\n";

$a = 10;
$b = 20;

echo "Before Swap: a = $a, b = $b\n";

// Using a third variable
$temp = $a;
$a = $b;
$b = $temp;

echo "After Swap: a = $a, b = $b\n\n";
 

// Swapping without a third variable
echo "Swapping without a third variable:\n";

$x = 10;
$y = 20;

echo "Before Swap: x = $x, y = $y\n";

// Without a third variable (using arithmetic operations)
$x = $x + $y; // x now becomes 30
$y = $x - $y; // y becomes 10
$x = $x - $y; // x becomes 20

echo "After Swap: x = $x, y = $y\n";
?>

