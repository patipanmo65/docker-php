<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    // Check if a new file is uploaded
    if (!empty($_FILES['pdf_file']['name'])) {
        // Handle PDF file upload
        $pdfUploadDir = '../uploads/pdf/';
        $pdfUploadedFile = $_FILES['pdf_file']['name'];
        $pdfTempName = $_FILES['pdf_file']['tmp_name'];
        $pdfFilePath = $pdfUploadDir . $pdfUploadedFile;

        // Delete the old PDF file if it exists
        $sqlSelect = "SELECT pdf_file FROM export_hosxp_2566 WHERE id=?";
        $stmtSelect = mysqli_prepare($conn, $sqlSelect);
        mysqli_stmt_bind_param($stmtSelect, "i", $id);
        mysqli_stmt_execute($stmtSelect);
        mysqli_stmt_bind_result($stmtSelect, $oldPdfFile);
        mysqli_stmt_fetch($stmtSelect);
        mysqli_stmt_close($stmtSelect);
        if ($oldPdfFile && file_exists($oldPdfFile)) {
            unlink($oldPdfFile);
        }

        // Move the new PDF file to the upload directory
        if (move_uploaded_file($pdfTempName, $pdfFilePath)) {
            // Handle image file upload
            $imageUploadDir = '../uploads/images/';
            $imageUploadedFile = $_FILES['image']['name'];
            $imageTempName = $_FILES['image']['tmp_name'];
            $imageFilePath = $imageUploadDir . $imageUploadedFile;

            // Delete the old image file if it exists
            $sqlSelectImage = "SELECT image FROM export_hosxp_2566 WHERE id=?";
            $stmtSelectImage = mysqli_prepare($conn, $sqlSelectImage);
            mysqli_stmt_bind_param($stmtSelectImage, "i", $id);
            mysqli_stmt_execute($stmtSelectImage);
            mysqli_stmt_bind_result($stmtSelectImage, $oldImageFile);
            mysqli_stmt_fetch($stmtSelectImage);
            mysqli_stmt_close($stmtSelectImage);
            if ($oldImageFile && file_exists($oldImageFile)) {
                unlink($oldImageFile);
            }

            // Move the new image file to the upload directory
            if (move_uploaded_file($imageTempName, $imageFilePath)) {
                // Update database with the new file paths
                $sql = "UPDATE export_hosxp_2566 SET title=?, content=?, pdf_file=?, image=? WHERE id=?";
                $stmt = mysqli_prepare($conn, $sql);
                mysqli_stmt_bind_param($stmt, "ssssi", $title, $content, $pdfFilePath, $imageFilePath, $id);
            } else {
                echo "ไม่สามารถอัพโหลดรูปภาพได้";
                exit();
            }
        } else {
            echo "ไม่สามารถอัพโหลดไฟล์ PDF ได้";
            exit();
        }
    } else {
        // Update without changing the file
        $sql = "UPDATE export_hosxp_2566 SET title=?, content=? WHERE id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssi", $title, $content, $id);
    }

    if (mysqli_stmt_execute($stmt)) {
        echo "อัปเดตข้อมูลเรียบร้อย";
        header('Location: ../');
        exit();
    } else {
        echo "ไม่สามารถอัปเดตข้อมูลได้";
        exit();
    }

    mysqli_stmt_close($stmt);
} else {
    // Handle case when form is not submitted
    echo "โปรดกรอกข้อมูลและส่งแบบฟอร์ม";
}

// Close connection
mysqli_close($conn);
