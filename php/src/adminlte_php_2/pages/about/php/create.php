<?php
// connect server 
require_once('connect.php');



if (isset($_POST['submit'])) {
    // หลีกเลี่ยงอินพุตของผู้ใช้เพื่อความปลอดภัย
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $hospital = mysqli_real_escape_string($conn, $_POST['hospital']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $specialization = mysqli_real_escape_string($conn, $_POST['specialization']);

    // insert query ข้อมูลใน ฐานข้อมูล 
    $sql = "INSERT INTO doctors_list (name, hospital, position, specialization) 
            VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $hospital, $position, $specialization);

    if (mysqli_stmt_execute($stmt)) {
        echo "เพิ่มข้อมูลเสร็จเรียบร้อย";
        header('Location: ../');
        exit();
    } else {
        echo "เพิ่มข้อมูลไม่สำเร็จ";
    }

    mysqli_stmt_close($stmt);
} else {
    // เมื่อส่งข้อมูลไม่สำเร็จ
    echo "โปรดกรอกข้อมูลและส่งแบบฟอร์ม";
}

// Close connection
mysqli_close($conn);
