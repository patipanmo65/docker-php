<?php


// เชื่อมต่อ ฐานข้อมูล sql 

require_once('connect.php');

// ลบข้อมูล จาก ตาราง  doctors_list โดยลบ ทั้ง id

if (isset($_GET['id'])) {
    $sql = "DELETE FROM doctors_list WHERE id = '" . mysqli_real_escape_string($conn, $_GET['id']) . "' ";
    if (mysqli_query($conn, $sql)) {
        echo '<script> alert("ลบข้อมูลเสร็จเรียบร้อย")</script>';
        header('Refresh:0; url= ../');
    } else {
        echo '<script> alert("ลบข้อมูลไม่สำเร็จ")</script>';
        header('Refresh:0; url= ../');
    }
}
mysqli_close($conn);
