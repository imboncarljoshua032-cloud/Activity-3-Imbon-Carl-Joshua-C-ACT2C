<?php

// Grade variables
$grade1 = 85;
$grade2 = 90;
$grade3 = 78;
$grade4 = 88;
$grade5 = 92;

// Calculate average
$average = ($grade1 + $grade2 + $grade3 + $grade4 + $grade5) / 5;

// Determine letter grade
if ($average >= 90) {
    $letter = "A";
} elseif ($average >= 80) {
    $letter = "B";
} elseif ($average >= 70) {
    $letter = "C";
} elseif ($average >= 60) {
    $letter = "D";
} else {
    $letter = "F";
}

// Determine remark
if ($average >= 74.5) {
    $remark = "Passed";
} else {
    $remark = "Failed";
}

// Display results
echo "Subject 1: $grade1<\n>";
echo "Subject 2: $grade2<\n>";
echo "Subject 3: $grade3<\n>";
echo "Subject 4: $grade4<\n>";
echo "Subject 5: $grade5<\n><\n>";

echo "Average: " . number_format($average, 2) . "<\n>";
echo "Letter Grade: $letter<\n>";
echo "Remark: $remark";

?>