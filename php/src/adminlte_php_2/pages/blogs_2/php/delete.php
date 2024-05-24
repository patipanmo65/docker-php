<?php
// เชื่อมต่อฐานข้อมูล
include "connection.php";

// ตรวจสอบว่ามีการส่งค่า ID ของข่าวมาหรือไม่
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // ลบข้อมูลข่าว
    $sql = "DELETE FROM blogs WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "ลบข้อมูลเรียบร้อยแล้ว";
    } else {
        echo "เกิดข้อผิดพลาด: " . $conn->error;
    }

    // ปิดการเชื่อมต่อ
    $conn->close();

    // ส่งกลับไปยังหน้ารายการข่าวหลัก
    header("Location: index.php");
    exit();
} else {
    // ถ้าไม่มี ID ส่งมา ให้ส่งกลับไปยังหน้ารายการข่าวหลัก
    header("Location: index.php");
    exit();
}
