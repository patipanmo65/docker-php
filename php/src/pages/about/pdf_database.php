<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_p";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// คิวรีฐานข้อมูลเพื่อดึงข้อมูล PDF
$sql = "SELECT file_name FROM pdf_files WHERE id = 1"; // แก้ไขตามโครงสร้างของฐานข้อมูลของคุณ

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // รับข้อมูล PDF
    $row = $result->fetch_assoc();
    $file_name = $row["file_name"];

    // สร้างลิงก์เพื่อดาวน์โหลด PDF
    echo '<a href="' . $file_name . '" id="pdfLink" download>3 มิ.ย. 2562 รายงานสถานการณ์ด้านการเงินการคลัง โรงพยาบาลจังหวัดน่าน</a>';
} else {
    echo "No PDF found";
}
$conn->close();
