<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $sql = "UPDATE projects SET 
                name = '" . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . "',
                description = '" . htmlspecialchars($description, ENT_QUOTES, 'UTF-8') . "'
                WHERE id = '" . $id . "'";

    if (mysqli_query($conn, $sql)) {
        echo '<script> alert("แก้ไขข้อมูลเสร็จเรียบร้อย")</script>';
        header('Refresh:0; url= ../');
    } else {
        echo '<script> alert("แก้ไขข้อมูลไม่สำเร็จ")</script>';
        header('Refresh:0; url= ../form-update.php');
    }
}

mysqli_close($conn);
