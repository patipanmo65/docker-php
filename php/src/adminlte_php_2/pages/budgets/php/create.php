<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $project_name = mysqli_real_escape_string($conn, $_POST['project_name']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);

    // Attempt insert query execution
    $sql = "INSERT INTO budgets (project_name, amount, year) 
            VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sii", $project_name, $amount, $year);

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
