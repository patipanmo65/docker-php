<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Hospital Landing page" />
    <meta name="author" content="" />
    <title>กิจกรรม</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <meta name="theme-color" content="#563d7c" />

    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
    }

    h5 {
        text-align: center;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .row {
        margin-bottom: 30px;
    }

    ol {
        padding-left: 20px;
    }

    .postext {
        background-color: #563d7c;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-align: center;
        margin-bottom: 20px;
    }
    </style>

</head>

<body>

    <!-- เรียกใช้ nav -->
    <?php require_once('../../nav.php') ?>

    <main class="container">

        <h4>ภาพกิจกรรม</h4>

        <div class="row">
            <div class="col-md-6">
                <img src="https://scontent-bkk1-2.xx.fbcdn.net/v/t39.30808-6/444485923_1557991888273528_6280129581806842377_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGV5-fRRD0Ym9lZLXpB3Gz4fKW5WMJIZSd8pblYwkhlJwiXwilNnCJCRhge1gRjyJrvU828upP3PJKABh7yVwql&_nc_ohc=5b4hcxmCvhIQ7kNvgFEFAR3&_nc_ht=scontent-bkk1-2.xx&oh=00_AYAX2p2jbrsKmph8mHTwHiF-iN1upkctR36RYp74dFlT-Q&oe=665B4ECB"
                    class="img-fluid rounded" alt="..." style="max-width: 500px; height: auto;">
            </div>

            <div class="col-md-6">
                <?php
                // เชื่อมต่อฐานข้อมูล
                $servername = "db";
                $username = "MYSQL_USER";
                $password = "MYSQL_PASSWORD";
                $dbname = "MYSQL_DATABASE";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // เช็คการเชื่อมต่อ
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // คำสั่ง SQL เพื่อดึงข้อมูล
                $sql = "SELECT description FROM activities";
                $result = $conn->query($sql);

                // ตรวจสอบว่าการ query สำเร็จหรือไม่
                if ($result === false) {
                    // แสดงข้อผิดพลาดของ SQL query
                    echo "<p class='text-left'>Error: " . $conn->error . "</p>";
                } else {
                    // ตรวจสอบว่ามีข้อมูลหรือไม่
                    if ($result->num_rows > 0) {
                        // วนลูปเพื่อแสดงข้อมูล
                        while ($row = $result->fetch_assoc()) {
                            // แสดงข้อมูลในรูปแบบ <p>
                            echo "<p class='text-left'>" . $row['title'] . "</p>";
                        }
                    } else {
                        // ถ้าไม่มีข้อมูล
                        echo "<p class='text-left'>Description not available</p>";
                    }
                }
                $conn->close();
                ?>
            </div>
        </div>

    </main>

    <!-- เรียกใช้ footer -->
    <?php require("../../footer.php") ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>