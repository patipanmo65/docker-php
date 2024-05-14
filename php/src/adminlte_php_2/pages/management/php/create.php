<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $title = mysqli_real_escape_string($conn, $_POST['name']);
    $content = mysqli_real_escape_string($conn, $_POST['position']);

    // Image handling
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_error = $_FILES['image']['error'];

    // Check if file is selected
    if ($file_error === 0) {
        $file_destination = '../uploads/' . $file_name;

        // Move uploaded file to destination
        if (move_uploaded_file($file_tmp, $file_destination)) {
            echo "รูปภาพถูกอัปโหลดเรียบร้อย";
        } else {
            echo "มีข้อผิดพลาดในการอัปโหลดรูปภาพ";
        }
    } else {
        echo "กรุณาเลือกไฟล์รูปภาพ";
    }

    // Attempt insert query execution
    $sql = "INSERT INTO management (name, position, image) 
            VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $title, $content, $file_name);

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
