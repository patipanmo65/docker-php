<?php
// เชื่อมต่อกับฐานข้อมูล MySQL
$servername = "db"; // เชื่อมต่อกับ localhost
$username = "MYSQL_USER"; // ชื่อผู้ใช้ของ MySQL
$password = "MYSQL_PASSWORD"; // รหัสผ่านของ MySQL
$dbname = "MYSQL_DATABASE"; // ชื่อฐานข้อมูล

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// รับค่าจากฟอร์มและเก็บไว้ในตัวแปร
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$hospital = $_POST['hospital'];
$position = $_POST['position'];
$specialization = $_POST['specialization'];
$id = $_POST['id'];

// เช็คว่าเป็นการเพิ่มข้อมูลใหม่หรือแก้ไขข้อมูลเดิม
if (empty($id)) {
    // เพิ่มข้อมูลใหม่
    $sql = "INSERT INTO doctors_list (first_name, last_name, hospital, position, specialization) 
            VALUES ('$first_name', '$last_name', '$hospital', '$position', '$specialization')";
} else {
    // แก้ไขข้อมูลเดิม
    $sql = "UPDATE doctors_list 
            SET first_name='$first_name', last_name='$last_name', hospital='$hospital', position='$position', specialization='$specialization' 
            WHERE id='$id'";
}

// ทำการเพิ่มหรือแก้ไขข้อมูลในฐานข้อมูล
if ($conn->query($sql) === TRUE) {
    echo "บันทึกข้อมูลเรียบร้อยแล้ว";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// ปิดการเชื่อมต่อ
$conn->close();
