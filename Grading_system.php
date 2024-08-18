

<?php

function calculateGPA($grades, $credits) {
    $totalPoints = 0;
    $totalCredits = 0;

    $gradePoints = [
        'A+' => 4.0,
        'A' => 3.75,
        'A-' => 3.5,
        'B+' => 3.25,
        'B' => 3.0,
        'B-' => 2.75,
        'C+' => 2.50,
        'C' => 2.25,
        'D' => 2.00,
        'F' => 0.0
    ];

    
    foreach ($grades as $index => $grade) {
        if (isset($gradePoints[$grade])) {
            $totalPoints += $gradePoints[$grade] * $credits[$index];
            $totalCredits += $credits[$index];
        } else {
            echo "Invalid grade: $grade\n";
        }
    }

    
    if ($totalCredits > 0) {
        return $totalPoints / $totalCredits;
    } else {
        return 0;
    }
}


$grades = ['A', 'B', 'A', 'A+']; 
$credits = [3, 3, 1.5, 3]; 
$gpa = calculateGPA($grades, $credits);
echo "Your GPA is: " . number_format($gpa, 2) . "\n";
?>
