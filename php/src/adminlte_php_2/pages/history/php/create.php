<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    // Attempt insert query execution
    $sql = "INSERT INTO history (title, description, date) VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $title, $description, $date);

    if (mysqli_stmt_execute($stmt)) {
        // Output success message and redirect using JavaScript
        echo '<script>
                alert("เพิ่มข้อมูลเสร็จเรียบร้อย");
                window.location.href = "../";
              </script>';
        exit(); // Stop further execution
    } else {
        echo "เพิ่มข้อมูลไม่สำเร็จ";
    }

    mysqli_stmt_close($stmt);
} else {
    // Handle case when form is not submitted
    echo "โปรดกรอกข้อมูลและส่งแบบฟอร์ม";
}

// Close connection
mysqli_close($conn);
