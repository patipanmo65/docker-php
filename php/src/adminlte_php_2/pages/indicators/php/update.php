<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    $indicator = mysqli_real_escape_string($conn, $_POST['indicator']);
    $target = mysqli_real_escape_string($conn, $_POST['target']);

    $sql = "UPDATE indicators SET 
                indicator = '" . htmlspecialchars($indicator, ENT_QUOTES, 'UTF-8') . "',
                target = '" . htmlspecialchars($target, ENT_QUOTES, 'UTF-8') . "'
                WHERE id = '" . mysqli_real_escape_string($conn, $_POST['id']) . "' ";

    if (mysqli_query($conn, $sql)) {
        echo '<script> alert("แก้ไขข้อมูลเสร็จเรียบร้อย")</script>';
        header('Refresh:0; url= ../');
    } else {
        echo '<script> alert("แก้ไขข้อมูลไม่สำเร็จ")</script>';
        header('Refresh:0; url= ../form-update.php');
    }
}

mysqli_close($conn);
