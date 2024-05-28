<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    // Handle file upload
    $uploadDir = '../uploads/';
    $uploadedFile = $_FILES['pdf_file']['name'];
    $tempName = $_FILES['pdf_file']['tmp_name'];
    $pdfFilePath = $uploadDir . basename($uploadedFile);

    $uploadSuccess = false;
    $dbSuccess = false;

    if (move_uploaded_file($tempName, $pdfFilePath)) {
        // File uploaded successfully, proceed with database insertion
        $uploadSuccess = true;
        $sql = "INSERT INTO annual_reports (title, content, pdf_file) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sss", $title, $content, $pdfFilePath);

            if (mysqli_stmt_execute($stmt)) {
                $dbSuccess = true;
            } else {
                $dbSuccess = false;
            }

            mysqli_stmt_close($stmt);
        } else {
            $dbSuccess = false;
        }
    } else {
        $uploadSuccess = false;
    }

    if ($uploadSuccess && $dbSuccess) {
        header('Location: ../');
        exit();
    } else {
        $errorMessage = !$uploadSuccess ? "ไม่สามารถอัพโหลดไฟล์ได้" : "เพิ่มข้อมูลไม่สำเร็จ";
        echo $errorMessage;
    }
} else {
    // Handle case when form is not submitted
    echo "โปรดกรอกข้อมูลและส่งแบบฟอร์ม";
}

// Close connection
mysqli_close($conn);
