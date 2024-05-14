<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $feedback = mysqli_real_escape_string($conn, $_POST['feedback']);

    // Attempt insert query execution
    $sql = "INSERT INTO feedback (name, email, feedback) 
            VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    
    // Check if the statement is prepared successfully
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $feedback);

        if (mysqli_stmt_execute($stmt)) {
            echo "เพิ่มข้อมูลเสร็จเรียบร้อย";
            header('Location: ../');
            exit();
        } else {
            echo "Error: " . mysqli_error($conn); // Display any SQL errors
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($conn); // Display any errors in preparing the statement
    }
} else {
    // Handle case when form is not submitted
    echo "โปรดกรอกข้อมูลและส่งแบบฟอร์ม";
}

// Close connection
mysqli_close($conn);