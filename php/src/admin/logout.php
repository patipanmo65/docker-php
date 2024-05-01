<?php
// เริ่ม session
session_start();

// Unset session ทั้งหมด
$_SESSION = array();

// ทำลาย session
session_destroy();

// Redirect ไปยังหน้าเข้าสู่ระบบหรือหน้าหลักของเว็บไซต์
header("location: admin_login.php");
exit;
