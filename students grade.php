<?php
// Taking input from the user for 5 subjects
$subject1 = (int)readline('enter marks of first subject: ');
$subject2 = (int)readline('enter marks of second subject: ');
$subject3 = (int)readline('enter marks of third subject: ');
$subject4 = (int)readline('enter marks of fourth subject: ');
$subject5 = (int)readline('enter marks of fifth subject: ');

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
