<?php
// Arithmetic Operators
$num1 = 10;
$num2 = 5;

echo "Arithmetic Operators:\n";
echo "Addition: " . ($num1 + $num2) . "\n";          // Addition
echo "Subtraction: " . ($num1 - $num2) . "\n";       // Subtraction
echo "Multiplication: " . ($num1 * $num2) . "\n";    // Multiplication
echo "Division: " . ($num1 / $num2) . "\n";          // Division
echo "Modulus: " . ($num1 % $num2) . "\n";           // Modulus (Remainder)
echo "Exponentiation: " . ($num1 ** $num2) . "\n";   // Exponentiation

// Comparison Operators
$num3 = 10;
$num4 = 20;

echo "\nComparison Operators:\n";
echo "Equal: " . ($num3 == $num4 ? 'True' : 'False') . "\n";       // Equal
echo "Not Equal: " . ($num3 != $num4 ? 'True' : 'False') . "\n";   // Not Equal
echo "Greater Than: " . ($num3 > $num4 ? 'True' : 'False') . "\n"; // Greater than
echo "Less Than: " . ($num3 < $num4 ? 'True' : 'False') . "\n";    // Less than
echo "Greater or Equal: " . ($num3 >= $num4 ? 'True' : 'False') . "\n"; // Greater than or equal
echo "Less or Equal: " . ($num3 <= $num4 ? 'True' : 'False') . "\n";    // Less than or equal

// Logical Operators
$var1 = true;
$var2 = false;

echo "\nLogical Operators:\n";
echo "AND (&&): " . (($var1 && $var2) ? 'True' : 'False') . "\n";  // AND
echo "OR (||): " . (($var1 || $var2) ? 'True' : 'False') . "\n";   // OR
echo "NOT (!): " . ((!$var1) ? 'True' : 'False') . "\n";           // NOT
?>
