<?php

require_once('connect.php');

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "DELETE FROM history WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo '<script>
                alert("ลบข้อมูลเสร็จเรียบร้อย");
                window.location.href = "../";
              </script>';
    } else {
        echo '<script>
                alert("ลบข้อมูลไม่สำเร็จ");
                window.location.href = "../";
              </script>';
    }
}

mysqli_close($conn);
