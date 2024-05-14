<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $specialization = mysqli_real_escape_string($conn, $_POST['specialization']);
    $education_history = mysqli_real_escape_string($conn, $_POST['education_history']);
    $certification = mysqli_real_escape_string($conn, $_POST['certification']);
    $work_experience = mysqli_real_escape_string($conn, $_POST['work_experience']);
    $Time_Business = mysqli_real_escape_string($conn, $_POST['Time_Business']);
    $work = mysqli_real_escape_string($conn, $_POST['work']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    // Get the old image name
    $old_image_sql = "SELECT image FROM doctors_profile WHERE id = '$id'";
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
        $sql = "UPDATE doctors_profile SET 
                    name = '$name',
                    image = '$image',
                    phone = '$phone',
                    specialization = '$specialization',
                    education_history = '$education_history',
                    certification = '$certification',
                    work_experience = '$work_experience',
                    Time_Business = '$Time_Business',
                    work = '$work'
                WHERE id = '$id'";
    } else {
        // Update without changing the image
        $sql = "UPDATE doctors_profile SET 
                    name = '$name',
                    phone = '$phone',
                    specialization = '$specialization',
                    education_history = '$education_history',
                    certification = '$certification',
                    work_experience = '$work_experience',
                    Time_Business = '$Time_Business',
                    work = '$work'
                WHERE id = '$id'";
    }

    if (mysqli_query($conn, $sql)) {
        echo '<script> alert("แก้ไขข้อมูลเสร็จเรียบร้อย")</script>';
        header('Refresh:0; url= ../');
    } else {
        echo '<script> alert("แก้ไขข้อมูลไม่สำเร็จ")</script>';
        header('Refresh:0; url= ../form-update.php');
    }
}

mysqli_close($conn);
