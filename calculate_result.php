<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <h2>Result</h2>

    <?php
    // Retrieve form data
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $subject3 = $_POST['subject3'];
    $subject4 = $_POST['subject4'];
    $subject5 = $_POST['subject5'];

    // Calculate total and average
    $totalMarks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
    $average = $totalMarks / 5;

    // Set pass/fail criteria
    $passingMarksPerSubject = 50;
    $passOrFail = ($subject1 >= $passingMarksPerSubject && $subject2 >= $passingMarksPerSubject &&
                   $subject3 >= $passingMarksPerSubject && $subject4 >= $passingMarksPerSubject &&
                   $subject5 >= $passingMarksPerSubject);

    // Display result
    echo "<p>Total Marks: $totalMarks</p>";
    echo "<p>Average Marks: $average</p>";

    if ($passOrFail) {
        echo "<p>Congratulations! You have passed.</p>";
    } else {
        echo "<p>Sorry! You have failed. Better luck next time.</p>";
    }
    ?>
</body>
</html>
