<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    // Handle file upload
    $uploadDir = '../uploads/';
    $uploadedFile = $_FILES['pdf_file']['name'];
    $tempName = $_FILES['pdf_file']['tmp_name'];
    $pdfFilePath = $uploadDir . $uploadedFile;

    if (move_uploaded_file($tempName, $pdfFilePath)) {
        // File uploaded successfully, proceed with database insertion
        $sql = "INSERT INTO biddingannouncements (date, content, pdf_file) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $date, $content, $pdfFilePath);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            header('Location: ../');
            exit();
        } else {
            echo "เพิ่มข้อมูลไม่สำเร็จ";
        }
    } else {
        echo "ไม่สามารถอัพโหลดไฟล์ได้";
    }
} else {
    // Handle case when form is not submitted
    echo "โปรดกรอกข้อมูลและส่งแบบฟอร์ม";
}

// Close connection
mysqli_close($conn);
