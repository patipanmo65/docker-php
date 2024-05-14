<!-- insert_executive.php -->

<?php
// Connect to database
$conn = mysqli_connect("db", "MYSQL_USER", "MYSQL_PASSWORD", "MYSQL_DATABASE");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from form
    $name = $_POST['name'];
    $position = $_POST['position'];
    $bio = $_POST['bio'];

    // Prepare SQL statement to insert data into executives table
    $sql = "INSERT INTO executives (name, position, bio) VALUES (?, ?, ?)";

    // Prepare and bind parameters
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $name, $position, $bio);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "ผู้บริหารถูกเพิ่มเรียบร้อยแล้ว";
    } else {
        echo "มีข้อผิดพลาดในการเพิ่มข้อมูล: " . mysqli_error($conn);
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

// Close the connection
mysqli_close($conn);
?>