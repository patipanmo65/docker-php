<?php

require_once '../connect.php';
$username = $_POST['username'] ?? null;
$password = '123456';
/**
 |--------------------------------------------------------------------------
 | ตรวจสอบ Username ในฐานข้อมูล
 | 'SELECT * FROM users where username = :username'
 |--------------------------------------------------------------------------

 |--------------------------------------------------------------------------
 | ตรวจสอบ Password ว่าตรงกันหรือไม่ 
 | password_verify($password, $passFromDatabaseHash)
 |--------------------------------------------------------------------------
 */
$passFromDatabaseHash = '$2y$10$yLlXB7eGw39tFsPTkt8H9O7hTgoYU7YJjvyyDl2sZ8z7G7vop.Q5q';

if (password_verify($password, $passFromDatabaseHash)) {
    /** 
     * ตั้งค่า Session ไว้ใช้งาน 
     */
    $_SESSION['AD_ID'] = '1';
    $_SESSION['AD_FIRSTNAME'] = 'Patipan';
    $_SESSION['AD_LASTNAME'] = 'Moonchai';
    $_SESSION['AD_USERNAME'] = 'hospital';
    $_SESSION['AD_IMAGE'] = 'profile.jpg';
    $_SESSION['AD_STATUS'] = 'admin';
    $_SESSION['AD_LOGIN'] = date('Y-m-d H:i:s');

    /** หลังจากนั้น redirect ไปยังหน้า dashboard */
    header('location:../../pages/dashboard/');
} else {
    echo '<script> alert("รหัสผ่านไม่ถูกต้อง") </script>';
    header('Refresh:0; url=../../index.php');
}



// authentication

/*
<?php
session_start();
require_once '../connect.php';

$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

if (!$username || !$password) {
    echo '<script>alert("กรุณากรอกชื่อผู้ใช้และรหัสผ่าน")</script>';
    header('Refresh:0; url=../../index.php');
    exit();
}

try {
    // Prepare and execute query to fetch user details
    $stmt = $conn->prepare('SELECT id, firstname, lastname, username, password, image, status FROM users WHERE username = :username');
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Set session variables
        $_SESSION['AD_ID'] = $user['id'];
        $_SESSION['AD_FIRSTNAME'] = $user['firstname'];
        $_SESSION['AD_LASTNAME'] = $user['lastname'];
        $_SESSION['AD_USERNAME'] = $user['username'];
        $_SESSION['AD_IMAGE'] = $user['image'];
        $_SESSION['AD_STATUS'] = $user['status'];
        $_SESSION['AD_LOGIN'] = date('Y-m-d H:i:s');

        // Redirect to the dashboard
        header('Location: ../../pages/dashboard/');
        exit();
    } else {
        echo '<script>alert("ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง")</script>';
        header('Refresh:0; url=../../index.php');
        exit();
    }
} catch (PDOException $e) {
    echo '<script>alert("เกิดข้อผิดพลาดในระบบฐานข้อมูล")</script>';
    header('Refresh:0; url=../../index.php');
    exit();
}
?>




*/