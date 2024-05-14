<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    // Check if a new file is uploaded
    if (!empty($_FILES['pdf_file']['name'])) {
        // Handle PDF file upload
        $pdfUploadDir = '../uploads/pdf/';
        $pdfUploadedFile = $_FILES['pdf_file']['name'];
        $pdfTempName = $_FILES['pdf_file']['tmp_name'];
        $pdfFilePath = $pdfUploadDir . $pdfUploadedFile;

        // Create the PDF upload directory if it doesn't exist
        if (!file_exists($pdfUploadDir)) {
            mkdir($pdfUploadDir, 0777, true); // Create the directory with full permissions (0777)
        }

        if (move_uploaded_file($pdfTempName, $pdfFilePath)) {
            // Handle image file upload
            $imageUploadDir = '../uploads/images/';
            $imageUploadedFile = $_FILES['image']['name'];
            $imageTempName = $_FILES['image']['tmp_name'];
            $imageFilePath = $imageUploadDir . $imageUploadedFile;

            // Create the image upload directory if it doesn't exist
            if (!file_exists($imageUploadDir)) {
                mkdir($imageUploadDir, 0777, true); // Create the directory with full permissions (0777)
            }

            if (move_uploaded_file($imageTempName, $imageFilePath)) {
                // Insert data into the database
                $sql = "INSERT INTO hpsxp_documents (title, content, pdf_file, image) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_prepare($conn, $sql);
                mysqli_stmt_bind_param($stmt, "ssss", $title, $content, $pdfFilePath, $imageFilePath);

                if (mysqli_stmt_execute($stmt)) {
                    echo "เพิ่มข้อมูลเสร็จเรียบร้อย";
                    header('Location: ../');
                    exit();
                } else {
                    echo "เพิ่มข้อมูลไม่สำเร็จ";
                }

                mysqli_stmt_close($stmt);
            } else {
                echo "ไม่สามารถอัพโหลดรูปภาพได้";
            }
        } else {
            echo "ไม่สามารถอัพโหลดไฟล์ PDF ได้";
        }
    } else {
        echo "โปรดเลือกไฟล์ PDF ที่ต้องการอัพโหลด";
    }
} else {
    // Handle case when form is not submitted
    echo "โปรดกรอกข้อมูลและส่งแบบฟอร์ม";
}

// Close connection
mysqli_close($conn);
?>




// upload รูปภาพ ให้เข้า folder uploads ลบรูปเก่า