<?php
// Define a constant using define()
define("PI", 3.14159);

function testVariables() {
    // Local variable
    $localVar = 10;
    echo "Local Variable inside function: $localVar\n";
    
    // Accessing global variable inside function
    global $globalVar;
    echo "Global Variable inside function: $globalVar\n";
    
    // Static variable
    static $staticVar = 0;
    $staticVar++;
    echo "Static Variable inside function (incremented): $staticVar\n";
}

// Global variable
$globalVar = 20;

echo "Constant PI: " . PI . "\n"; // Accessing constant

// Accessing global variable outside function
echo "Global Variable outside function: $globalVar\n";

testVariables(); // First function call
testVariables(); // Second function call

// Local variable cannot be accessed outside the function
// echo $localVar; // This would cause an error

?>
