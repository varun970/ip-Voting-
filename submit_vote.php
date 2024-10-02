<!-- submit_vote.php -->

<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Assuming no password for XAMPP
$dbname = "voting"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the submitted form
$voterId = $_POST['voterId'];
$candidateId = $_POST['candidates'];

// Insert the vote into the database
$sql = "INSERT INTO votes (voter_id, candidate_id) VALUES ('$voterId', '$candidateId')";

if ($conn->query($sql) === TRUE) {
    echo "Vote submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
