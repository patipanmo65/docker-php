<?php

// ลบ ข้อมูลออกจาก ฐานข้อมูล
require_once('connect.php');


if (isset($_GET['id'])) {
    $sql = "DELETE FROM activities WHERE id = '" . mysqli_real_escape_string($conn, $_GET['id']) . "' ";
    if (mysqli_query($conn, $sql)) {
        echo '<script> alert("ลบข้อมูลเสร็จเรียบร้อย")</script>';
        header('Refresh:0; url= ./');
        exit(); // หลังจาก header() ควรจะใส่ exit() เพื่อหยุดการทำงานของ script ทันที
    } else {
        echo '<script> alert("ลบข้อมูลไม่สำเร็จ")</script>';
        header('Refresh:0; url= ../');
        exit(); // หลังจาก header() ควรจะใส่ exit() เพื่อหยุดการทำงานของ script ทันที
    }
}
mysqli_close($conn);
