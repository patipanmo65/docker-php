<?php
// การเชื่อมต่อฐานข้อมูล
$conn = mysqli_connect("db", "MYSQL_USER", "MYSQL_PASSWORD", "MYSQL_DATABASE");

// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $process_name = $_POST['process_name'];
    $description = $_POST['description'];

    $sql = "INSERT INTO treatment_process (process_name, description) VALUES ('$process_name', '$description')";

    if (mysqli_query($conn, $sql)) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!-- HTML form for adding treatment process -->
<form method="post">
    Process Name: <input type="text" name="process_name"><br>
    Description: <textarea name="description"></textarea><br>
    <input type="submit" value="Add">
</form>