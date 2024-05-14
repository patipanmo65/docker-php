<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $objective = mysqli_real_escape_string($conn, $_POST['objective']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    // Attempt update query execution
    $sql = "UPDATE strategy SET objective=?, description=?  WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssi", $objective, $description,  $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "อัปเดตข้อมูลเรียบร้อย";
        header('Location: ../');
        exit();
    } else {
        echo "ไม่สามารถอัปเดตข้อมูลได้";
    }

    mysqli_stmt_close($stmt);
} else {
    // Handle case when form is not submitted
    echo "โปรดกรอกข้อมูลและส่งแบบฟอร์ม";
}

// Close connection
mysqli_close($conn);
