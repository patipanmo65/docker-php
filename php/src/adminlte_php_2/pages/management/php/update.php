<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);

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

    // Attempt update query execution with image
    $sql = "UPDATE management SET name=?, position=?, image=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $name, $position, $file_name, $id);

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
