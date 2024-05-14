<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $objective = mysqli_real_escape_string($conn, $_POST['objective']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);


    // Attempt insert query execution
    $sql = "INSERT INTO strategy (objective, description) 
            VALUES (?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $objective, $description); // Adjusted to "ss"

    if (mysqli_stmt_execute($stmt)) {
        echo "เพิ่มข้อมูลเสร็จเรียบร้อย";
        header('Location: ../');
        exit();
    } else {
        echo "เพิ่มข้อมูลไม่สำเร็จ";
    }

    mysqli_stmt_close($stmt);
} else {
    // Handle case when form is not submitted
    echo "โปรดกรอกข้อมูลและส่งแบบฟอร์ม";
}

// Close connection
mysqli_close($conn);
