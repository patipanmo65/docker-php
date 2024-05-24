<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    // Check if a new file is uploaded
    if (!empty($_FILES['pdf_file']['name'])) {
        // Handle file upload
        $uploadDir = '../uploads/';
        $uploadedFile = $_FILES['pdf_file']['name'];
        $tempName = $_FILES['pdf_file']['tmp_name'];
        $pdfFilePath = $uploadDir . $uploadedFile;

        if (move_uploaded_file($tempName, $pdfFilePath)) {
            // Update with the new file path
            $sql = "UPDATE budgets SET title=?, content=?, pdf_file=? WHERE id=?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sssi", $title, $content, $pdfFilePath, $id);
        } else {
            echo "ไม่สามารถอัพโหลดไฟล์ได้";
            exit();
        }
    } else {
        // Update without changing the file
        $sql = "UPDATE budgets SET title=?, content=? WHERE id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssi", $title, $content, $id);
    }

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
