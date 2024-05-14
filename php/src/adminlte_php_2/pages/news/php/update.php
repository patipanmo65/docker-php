<?php
require_once('connect.php');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    // Check if image file is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_type = $_FILES['image']['type'];

        // Move uploaded image file to desired location (inside the images folder)
        move_uploaded_file($image_tmp, "uploads/images/$image");
    } else {
        // If no new image is uploaded, keep the old image
        $sql_img = "SELECT image FROM news WHERE id = ?";
        $stmt_img = mysqli_prepare($conn, $sql_img);
        mysqli_stmt_bind_param($stmt_img, "i", $id);
        mysqli_stmt_execute($stmt_img);
        mysqli_stmt_store_result($stmt_img);
        mysqli_stmt_bind_result($stmt_img, $old_image);
        mysqli_stmt_fetch($stmt_img);
        $image = $old_image;
    }

    // Check if PDF file is uploaded
    if (isset($_FILES['pdf_file']) && $_FILES['pdf_file']['error'] === UPLOAD_ERR_OK) {
        $pdf_file = $_FILES['pdf_file']['name'];
        $pdf_tmp = $_FILES['pdf_file']['tmp_name'];
        $pdf_type = $_FILES['pdf_file']['type'];

        // Move uploaded PDF file to desired location (inside the pdfs folder)
        move_uploaded_file($pdf_tmp, "uploads/pdfs/$pdf_file");
    } else {
        // If no new PDF file is uploaded, keep the old one
        $sql_pdf = "SELECT pdf_file FROM news WHERE id = ?";
        $stmt_pdf = mysqli_prepare($conn, $sql_pdf);
        mysqli_stmt_bind_param($stmt_pdf, "i", $id);
        mysqli_stmt_execute($stmt_pdf);
        mysqli_stmt_store_result($stmt_pdf);
        mysqli_stmt_bind_result($stmt_pdf, $old_pdf);
        mysqli_stmt_fetch($stmt_pdf);
        $pdf_file = $old_pdf;
    }

    // Update query
    $sql = "UPDATE news SET title = ?, content = ?, image = ?, pdf_file = ?, date = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssssi", $title, $content, $image, $pdf_file, $date, $id);

        if (mysqli_stmt_execute($stmt)) {
            echo "อัปเดตข้อมูลเรียบร้อย";
            header('Location: ../');
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Handle case when form is not submitted
    echo "โปรดกรอกข้อมูลและส่งแบบฟอร์ม";
}

// Close connection
mysqli_close($conn);
