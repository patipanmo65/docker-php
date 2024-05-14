<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $specialization = mysqli_real_escape_string($conn, $_POST['specialization']);
    $education_history = mysqli_real_escape_string($conn, $_POST['education_history']);
    $certification = mysqli_real_escape_string($conn, $_POST['certification']);
    $work_experience = mysqli_real_escape_string($conn, $_POST['work_experience']);
    $Time_Business = mysqli_real_escape_string($conn, $_POST['Time_Business']);
    $work = mysqli_real_escape_string($conn, $_POST['work']);

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
        $sql = "INSERT INTO doctors_profile (name, image, phone, specialization, education_history, certification, work_experience, Time_Business, work) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssssssss", $name, $image, $phone, $specialization, $education_history, $certification, $work_experience, $Time_Business, $work);

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
