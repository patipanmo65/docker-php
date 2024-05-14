<?php

require_once('connect.php');

// Check if the form was submitted
if (isset($_POST['submit'])) {

    // Escape user inputs for security
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    // Attempt insert query execution
    $sql = "INSERT INTO projects (name, description) 
            VALUES (?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $name, $description);

    if (mysqli_stmt_execute($stmt)) {
        // Redirect to the home page after successful insertion
        header('Location: ../');
        exit();
    } else {
        // Print error message and SQL error if insertion fails
        echo "Error: " . mysqli_error($conn);
        echo "<br>";
        echo "เพิ่มข้อมูลไม่สำเร็จ";
    }

    mysqli_stmt_close($stmt);
} else {
    // Print message if form is not submitted
    echo "โปรดกรอกข้อมูลและส่งแบบฟอร์ม";
}

// Close connection
mysqli_close($conn);
