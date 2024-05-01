<?php
// Database connection parameters
$servername = "db";
$username = "MYSQL_USER";
$password = "MYSQL_PASSWORD";
$database = "MYSQL_DATABASE";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data from the database
$sql = "SELECT * FROM doctors_table"; // เลือกทุกคอลัมน์จากตาราง doctorstable


// Execute the query
$result = $conn->query($sql);


?>


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <meta name="theme-color" content="#563d7c" />




</head>

<body>

    <!--เรียกใช้ header  -->

    <?php require_once '../../nav.php' ?>

    <main>
        <div class="title-container">
            <!-- <h1>ตารางแพทย์ออกตรวจ</h1> -->
        </div>
        <main role="main">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="qq.jpg" class="img-responsive" />
                        <div class="carousel-caption">
                            <div class="container">
                                <!-- นำเนื้อหาที่ต้องการใส่ในสไลด์ 1 มาวางที่นี่ -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="ww.jpg" class="img-responsive" />
                        <div class="carousel-caption">
                            <div class="container">
                                <!-- นำเนื้อหาที่ต้องการใส่ในสไลด์ 2 มาวางที่นี่ -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="ee.jpg" class="img-responsive" />
                        <div class="carousel-caption">
                            <div class="container">
                                <!-- นำเนื้อหาที่ต้องการใส่ในสไลด์ 3 มาวางที่นี่ -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://www.puahospital.go.th/wp-content/uploads/2023/12/405204503_736872325153682_2880091393100128885_n.jpg" class="img-responsive" />
                        <div class="carousel-caption">
                            <div class="container">
                                <!-- นำเนื้อหาที่ต้องการใส่ในสไลด์ 3 มาวางที่นี่ -->
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </main>
</body>
<br>
</main>
<div class="container">
    <h2 class="text-center">ตารางแพทย์ออกตรวจ</h2>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>รายชื่อเเพทย์</th>
                <th>เวลาทำการ</th>
                <th>สถานที่</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['patient_clinic'] . "</td>";
                    echo "<td>" . $row['time_business'] . "</td>";
                    echo "<td>" . $row['location'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<br>




<!-- เรียกใช้ footer -->
<?php require_once '../../footer.php' ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body้>


</html>