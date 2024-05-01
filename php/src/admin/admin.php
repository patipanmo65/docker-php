<?php
// เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect("db", "MYSQL_USER", "MYSQL_PASSWORD", "MYSQL_DATABASE");

// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// ข้อมูล Admin ที่จะเพิ่ม
$username = "admin";
$password = password_hash("admin123", PASSWORD_DEFAULT); // แปลงรหัสผ่านให้เป็นรหัสแฮช

// เพิ่มข้อมูลลงในฐานข้อมูล
$sql = "INSERT INTO admins (username, password) VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Admin added successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
