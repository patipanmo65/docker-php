<?php

// เชื่อมต่อ ฐานข้อมูล

require_once('connect.php');

if (isset($_POST['submit'])) {
    // หลีกเลี่ยงอินพุตของผู้ใช้เพื่อความปลอดภัย
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    // เพิ่มข้อมูลเข้า ฐานข้อมูล activities
    $sql = "INSERT INTO activities (title, content) 
            VALUES (?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $title, $content); // ปรับเป็น  "ss"

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        header('Location: ../../');
        exit();
    } else {
        echo "เพิ่มข้อมูลไม่สำเร็จ";
    }
} else {
    // 
    echo "โปรดกรอกข้อมูลและส่งแบบฟอร์ม";
}

// ปิดการเชื่อมต่อ
mysqli_close($conn);
