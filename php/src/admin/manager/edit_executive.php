<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Executive - โรงพยาบาลปัว</title>
    <style>
        /* Your CSS styles */
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

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>



<body>
    <div class="container">
        <h1>แก้ไขข้อมูลผู้บริหาร</h1>
        <?php
        // Connect to database
        $conn = mysqli_connect("db", "MYSQL_USER", "MYSQL_PASSWORD", "MYSQL_DATABASE");

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Check if executive ID is provided
        if (isset($_GET['id'])) {
            // Get executive ID from URL parameter
            $executive_id = $_GET['id'];

            // Retrieve executive data from database
            $sql = "SELECT * FROM executives WHERE id = $executive_id";
            $result = mysqli_query($conn, $sql);

            // Check if data exists
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
        ?>
                <form method="post" action="update_executive.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <label for="name">ชื่อ:</label><br>
                    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required><br><br>
                    <label for="position">ตำแหน่ง:</label><br>
                    <input type="text" id="position" name="position" value="<?php echo $row['position']; ?>" required><br><br>
                    <label for="bio">ประวัติ:</label><br>
                    <textarea id="bio" name="bio" rows="4" cols="50"><?php echo $row['bio']; ?></textarea><br><br>
                    <input type="submit" value="บันทึก">
                </form>
        <?php
            } else {
                echo "ไม่พบข้อมูลผู้บริหาร";
            }
        } else {
            echo "ไม่พบ ID ของผู้บริหารที่ต้องการแก้ไข";
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </div>
</body>

</html>