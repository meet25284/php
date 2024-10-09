<?php
function countElements($array) {
    $count = 0; // Initialize a counter

    // Loop through each element of the array
    foreach ($array as $key => $value) {
        $count++; // Increment the counter for each element
    }

    return $count; // Return the total count
}

// Test with a numeric array
$numericArray = [1, 2, 3, 4, 5];
$numericCount = countElements($numericArray);
echo "Number of elements in numeric array: " . $numericCount . "\n";

// Test with an associative array
$associativeArray = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];
$associativeCount = countElements($associativeArray);
echo "Number of elements in associative array: " . $associativeCount . "\n";

?>
