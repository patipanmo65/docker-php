<?php

/** เชื่อมต่อฐานข้อมูล  database */
$servername = "db";
$username = "MYSQL_USER";
$password = "MYSQL_PASSWORD";
$dbname = "MYSQL_DATABASE";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}
