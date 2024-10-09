<?php
$num = 1; // Initialize the number to be printed

for ($i = 1; $i <= 4; $i++) { // Outer loop for rows
    for ($j = 1; $j <= $i; $j++) { // Inner loop for columns in each row
        echo $num . " "; // Print the number
        $num++; // Increment the number
    }
    echo "\n"; // Move to the next line after each row
}
?>
