<?php
session_start();

// เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect("db", "MYSQL_USER", "MYSQL_PASSWORD", "MYSQL_DATABASE");

// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// ตรวจสอบการส่งข้อมูลแบบ POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ค้นหาข้อมูลของ Admin ในฐานข้อมูล
    $sql = "SELECT * FROM admins WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // การตรวจสอบผ่าน
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            header("location: admin_panel.php");
            exit;
        } else {
            // รหัสผ่านไม่ถูกต้อง
            $error_message = "รหัสผ่านไม่ถูกต้อง";
        }
    } else {
        // ไม่พบชื่อผู้ใช้
        $error_message = "ไม่พบชื่อผู้ใช้";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            width: 100%;
            text-align: center;
        }

        h4 {
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #00bfff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #41cfff;
        }

        .error {
            color: #f00;
        }
    </style>
</head>

<body>

    <?php if (isset($error_message)) { ?>
        <div class="container error">
            <?php echo $error_message; ?>
        </div>
    <?php } ?>

    <div class="container">
        <h4>เข้าสู่ระบบหลังบ้าน</h4>
        <form method="post">
            Username: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" value="Login">
        </form>
    </div>

</body>

</html>