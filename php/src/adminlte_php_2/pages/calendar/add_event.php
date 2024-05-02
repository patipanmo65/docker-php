<?php
// Connect to the database
$servername = "db";
$username = "MYSQL_USER";
$password = "MYSQL_PASSWORD";
$dbname = "MYSQL_DATABASE";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$title = $_POST['title'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

// Insert event into database
$sql = "INSERT INTO events (title, start_date, end_date) VALUES ('$title', '$start_date', '$end_date')";

if ($conn->query($sql) === TRUE) {
    // Redirect back to the previous page or any other page as desired
    header("Location: admin.php"); // Replace 'previous_page.php' with the desired page
    exit(); // Ensure that script execution stops after redirection
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
