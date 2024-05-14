<!-- delete_executive.php -->
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>
<?php
// Connect to database
$conn = mysqli_connect("db", "MYSQL_USER", "MYSQL_PASSWORD", "MYSQL_DATABASE");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if executive ID is provided
if (isset($_GET['id'])) {
    // Get executive ID
    $executive_id = $_GET['id'];

    // Prepare SQL statement to delete executive
    $sql = "DELETE FROM executives WHERE id = ?";

    // Prepare and bind parameter
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $executive_id);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "ผู้บริหารถูกลบออกเรียบร้อยแล้ว";
    } else {
        echo "มีข้อผิดพลาดในการลบข้อมูล: " . mysqli_error($conn);
    }

    // Close statement
    mysqli_stmt_close($stmt);
} else {
    echo "ไม่พบ ID ของผู้บริหารที่ต้องการลบ";
}

// Close connection
mysqli_close($conn);
?>