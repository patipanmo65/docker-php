<?php

require_once('connect.php');

if (isset($_GET['id'])) {
    $sql = "DELETE FROM strategy WHERE id = '" . mysqli_real_escape_string($conn, $_GET['id']) . "' ";
    if (mysqli_query($conn, $sql)) {
        // Use JavaScript to show an alert after redirection
        echo '<script> alert("ลบข้อมูลเสร็จเรียบร้อย"); window.location.href = "../"; </script>';
    } else {
        echo '<script> alert("ลบข้อมูลไม่สำเร็จ"); window.location.href = "../"; </script>';
    }
}

mysqli_close($conn);
