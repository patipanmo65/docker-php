<?php
// เชื่อมต่อกับฐานข้อมูล
$servername = "db";
$username = "MYSQL_USER";
$password = "MYSQL_PASSWORD";
$dbname = "MYSQL_DATABASE";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ตรวจสอบว่ามีการส่งค่า ID มาหรือไม่
if (isset($_GET['id'])) {
    // รับค่า ID ที่จะลบ
    $id = $_GET['id'];

    // คำสั่ง SQL สำหรับลบข้อมูล
    $sql = "DELETE FROM doctors_table WHERE id = $id"; // แทน doctors_table ด้วยชื่อตารางของคุณ

    if ($conn->query($sql) === TRUE) {
        // ถ้าลบสำเร็จ
        header("Location: ../manager/index.php?delete=success");
        exit();
    } else {
        // ถ้าเกิดข้อผิดพลาด
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
