<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    // Check if image file is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_type = $_FILES['image']['type'];

        // Move uploaded file to desired location
        move_uploaded_file($image_tmp, "uploads/$image");
    } else {
        echo "Error uploading file.";
        exit();
    }

    // Attempt insert query execution
    $sql = "INSERT INTO news (title, content, image, date) 
            VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $title, $content, $image, $date);

        if (mysqli_stmt_execute($stmt)) {
            echo "เพิ่มข้อมูลเสร็จเรียบร้อย";
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
