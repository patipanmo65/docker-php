<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);


    // Upload image
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($image);

    // Check if the "uploads" directory exists, if not, create it
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Move uploaded image to the "uploads" folder
    if (move_uploaded_file($image_temp, $target_file)) {
        // Attempt insert query execution
        $sql = "INSERT INTO health_news (title, content, image) 
                VALUES (?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $title, $content, $image);

        if (mysqli_stmt_execute($stmt)) {
            echo "เพิ่มข้อมูลเสร็จเรียบร้อย";
            header('Location: ../');
            exit();
        } else {
            echo "เพิ่มข้อมูลไม่สำเร็จ";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "เกิดข้อผิดพลาดในการอัปโหลดรูปภาพ";
    }
} else {
    // Handle case when form is not submitted
    echo "โปรดกรอกข้อมูลและส่งแบบฟอร์ม";
}

// Close connection
mysqli_close($conn);
