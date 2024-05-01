<!-- update_executive.php -->

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
    $id = $_POST['id'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $bio = $_POST['bio'];

    // Prepare SQL statement to update executive data
    $sql = "UPDATE executives SET name=?, position=?, bio=? WHERE id=?";

    // Prepare and bind parameters
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $name, $position, $bio, $id);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "ข้อมูลผู้บริหารถูกอัปเดตเรียบร้อยแล้ว";
    } else {
        echo "มีข้อผิดพลาดในการอัปเดตข้อมูล: " . mysqli_error($conn);
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

// Close the connection
mysqli_close($conn);
?>