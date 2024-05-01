<?php
// Connect to database
$conn = mysqli_connect("db", "MYSQL_USER", "MYSQL_PASSWORD", "MYSQL_DATABASE");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get vision and mission from form
    $vision = $_POST['vision'];
    $mission = $_POST['mission'];

    // Prepare SQL statement to update vision and mission
    $sql = "UPDATE vision_mission SET vision=?, mission=? WHERE id=1";

    // Prepare and bind parameters
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $vision, $mission);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "Records updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

// Close the connection
mysqli_close($conn);