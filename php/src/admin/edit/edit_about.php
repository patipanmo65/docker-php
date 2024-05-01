<!-- edit_about.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit About - โรงพยาบาลปัว</title>
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
</head>

<body>
    <div class="container">
        <h1>แก้ไขเกี่ยวกับโรงพยาบาลปัว</h1>
        <form method="post">
            <label for="about_content">เกี่ยวกับโรงพยาบาลปัว:</label><br>
            <textarea id="about_content" name="about_content" rows="6" cols="50"></textarea><br><br>
            <input type="submit" value="บันทึก">
        </form>
    </div>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Connect to database
        $conn = mysqli_connect("db", "MYSQL_USER", "MYSQL_PASSWORD", "MYSQL_DATABASE");

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get about content from form
        $about_content = $_POST['about_content'];

        // Update about content in database
        $sql = "UPDATE about SET content='$about_content' WHERE id=1";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

        // Close the connection
        mysqli_close($conn);
    }
    ?>
</body>

</html>