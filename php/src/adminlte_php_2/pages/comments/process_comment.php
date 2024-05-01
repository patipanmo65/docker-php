<?php
// เชื่อมต่อกับฐานข้อมูล
$servername = "db";
$username = "MYSQL_USER";
$password = "MYSQL_PASSWORD";
$dbname = "MYSQL_DATABASE";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ตรวจสอบว่ามีค่าที่ส่งมาจากฟอร์มหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $comment = $_POST['comment'] ?? '';

    // ใส่ข้อมูลลงในฐานข้อมูล
    $sql = "INSERT INTO comments (name, email, content) VALUES ('$name', '$email', '$comment')";
    if ($conn->query($sql) === TRUE) {
        echo "บันทึกข้อมูลสำเร็จ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>แบบฟอร์มรับความคิดเห็น</title>
</head>

<body>
    <h2>แบบฟอร์มรับความคิดเห็น</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">ชื่อ:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">อีเมล:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="comment">เนื้อหา:</label><br>
        <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="ส่งความคิดเห็น">
    </form>
</body>

</html>