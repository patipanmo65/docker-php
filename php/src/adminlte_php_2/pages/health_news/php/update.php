<?php
require_once('connect.php');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    // Get the old image name
    $old_image_sql = "SELECT image FROM health_news WHERE id = '$id'";
    $old_image_result = mysqli_query($conn, $old_image_sql);
    $old_image_row = mysqli_fetch_assoc($old_image_result);
    $old_image = $old_image_row['image'];

    // Upload image
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($image);
    move_uploaded_file($image_temp, $target_file);

    // Check if a new image was uploaded
    if (!empty($image)) {
        // Delete the old image
        if (!empty($old_image)) {
            unlink($target_dir . $old_image);
        }
        // Update with the new image
        $sql = "UPDATE health_news SET 
                    title = '$title',
                    content = '$content',
                WHERE id = '$id'";
    } else {
        // Update without changing the image
        $sql = "UPDATE health_news SET 
                    title = '$title',
                    content = '$content',
                WHERE id = '$id'";
    }

    if (mysqli_query($conn, $sql)) {
        echo '<script> alert("แก้ไขข้อมูลเสร็จเรียบร้อย")</script>';
        header('Refresh:0; url= ../');
        exit(); // Add exit() to prevent further output
    } else {
        echo '<script> alert("แก้ไขข้อมูลไม่สำเร็จ")</script>';
        header('Refresh:0; url= ../form-update.php');
        exit(); // Add exit() to prevent further output
    }
}

mysqli_close($conn);
