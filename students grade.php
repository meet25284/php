<?php
// Taking input from the user for 5 subjects
$subject1 = 78;
$subject2 = 99;
$subject3 =100;
$subject4 = 99;
$subject5 = 89;

// Calculate the total and average marks
$totalMarks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
$averageMarks = $totalMarks / 5;

// Determine the grade based on the average marks
if ($averageMarks >= 90) {
    $grade = "A+";
} elseif ($averageMarks >= 80) {
    $grade = "A";
} elseif ($averageMarks >= 70) {
    $grade = "B";
} elseif ($averageMarks >= 60) {
    $grade = "C";
} elseif ($averageMarks >= 50) {
    $grade = "D";
} else {
    $grade = "F";
}

// Output the total marks, average marks, and grade
echo "Total Marks: $totalMarks<br>";
echo "Average Marks: $averageMarks<br>";
echo "Grade: $grade<br>";
?>
