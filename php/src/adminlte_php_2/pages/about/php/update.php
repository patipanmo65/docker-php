<?php

require_once('connect.php');
if (isset($_POST['submit'])) {
    $sql = "UPDATE doctors_list SET 
                name = '" . htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') . "',
                hospital = '" . htmlspecialchars($_POST['hospital'], ENT_QUOTES, 'UTF-8') . "', 
                position = '" . htmlspecialchars($_POST['position'], ENT_QUOTES, 'UTF-8') . "', 
                specialization = '" . htmlspecialchars($_POST['specialization'], ENT_QUOTES, 'UTF-8') . "' 
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
