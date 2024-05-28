<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Hospital Landing page" />
    <meta name="author" content="Abhishek Keshri" />
    <title>บริการของเรา</title>

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

        <h4>เกี่ยวกับ รพร.ปัว</h4>

        <div class="row">
            <div class="col-md-6">
                <img src="http://www.puahospital.go.th/wp-content/uploads/2021/08/395505539_1411033859635999_646817923116112939_n-350x262.jpg"
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
                $sql = "SELECT description FROM history";
                $result = $conn->query($sql);

                // ตรวจสอบว่ามีข้อมูลหรือไม่
                if ($result->num_rows > 0) {
                    // วนลูปเพื่อแสดงข้อมูล
                    while ($row = $result->fetch_assoc()) {
                        // แสดงข้อมูลในรูปแบบ <p>
                        echo "<p class='text-left'>" . $row['description'] . "</p>";
                    }
                } else {
                    // ถ้าไม่มีข้อมูล
                    echo "<p class='text-left'>Description not available</p>";
                }
                $conn->close();
                ?>
            </div>
        </div>

        <div class="row">
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
                $sql = "SELECT * FROM training_education";
                $result = $conn->query($sql);

                // ตรวจสอบว่ามีข้อมูลหรือไม่
                if ($result->num_rows > 0) {
                    echo "<h4>การอบรมศึกษา</h4>";
                    echo "<ol>";
                    // วนลูปเพื่อแสดงข้อมูล
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>" . $row['content'] . "</li>";
                    }
                    echo "</ol>";
                } else {
                    // ถ้าไม่มีข้อมูล
                    echo "<p>No data available</p>";
                }
                $conn->close();
                ?>
            </div>
            <div class="col-md-6">
                <img src="http://www.puahospital.go.th/wp-content/uploads/2023/11/395335480_1411031426302909_375601264238806326_n-1536x1024.jpg"
                    class="img-fluid rounded" alt="..." style="width: 500px; height: auto;">
            </div>
        </div>

        <div class="row">
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
                $sql = "SELECT * FROM training_education";
                $result = $conn->query($sql);

                // ตรวจสอบว่ามีข้อมูลหรือไม่
                if ($result->num_rows > 0) {
                    echo "<ol>";
                    // วนลูปเพื่อแสดงข้อมูล
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>" . $row['content'] . "</li>";
                    }
                    echo "</ol>";
                } else {
                    // ถ้าไม่มีข้อมูล
                    echo "<p>No data available</p>";
                }
                $conn->close();
                ?>
            </div>
            <div class="col-md-6">
                <img src="http://www.puahospital.go.th/wp-content/uploads/2023/11/395364700_1411031469636238_5221975662196760921_n-1536x1024.jpg"
                    class="img-fluid rounded" alt="..." style="width: 500px; height: auto;">
            </div>
        </div>


        <div class="container" id="ribbin">
            <p class="postext">รางวัลและความภาคภูมิใจ</p>
        </div>

        <h6 class="text-center">เพื่อช่วยเหลือและสนับสนุนการบริหารงาน โรงพยาบาลสมเด็จพระยุพราชปัว
            และโรงพยาบาลชุมชนข้างเคียงรวมตลอดทั้งสถานพยาบาลอื่นๆ ในเครือข่าย
            ส่งเสริมและพัฒนาบุคลากรของโรงพยาบาลสมเด็จพระยุพราชปัว ทั้งในด้านการบริหารบริการสาธารณสุขและวิชาการ
            โดยให้สามารถใช้เทคโนโลยีที่เหมาะสม
            เพื่อเพิ่มขีดความสามารถในการปฎิบัติงานและเป็นตัวอย่างแก่โรงพยาบาลชุมชน และสถานพยาบาลอื่นๆ</h6>

    </main>

    <!-- เรียกใช้ footer -->
    <?php require("../../footer.php") ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>