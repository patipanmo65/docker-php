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
$sql = "SELECT * FROM doctors_list"; // เลือกทุกคอลัมน์จากตาราง doctorstable


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

    <!-- เรียกใช้ header -->
    <?php require_once '../../nav.php' ?>



    <div class="container">
        <form class="form-inline mt-2 mt-md-0 ml-auto" id="searchForm">
            <input class="form-control mr-sm-2" type="text" id="searchInput" placeholder="Search Doctors" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="button" id="searchButton">Search</button>
            <br>
            <div class="container">
                <div class="card-deck" id="cardDeck">
                    <br>
                </div>
                <br>




                <?php

                $count = 0; // นับจำนวนแพทย์ที่แสดง
                $max_per_row = 3; // จำนวนสูงสุดของแพทย์ต่อแถว

                // โค้ดสำหรับอัปโหลดรูปภาพ


                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // เริ่มแถวใหม่ทุก 3 คน
                        if ($count % $max_per_row == 0) {
                            echo '<div class="row">';
                        }

                        echo '<div class="col-md-4">';
                        echo '<div class="card">';
                        echo '<img src="cat.png" class="card-img-top" alt="...">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $row["name"] . '</h5>';
                        echo '<p class="card-text">ตึกที่ทำงาน: ' . $row["hospital"] . '</p>';
                        echo '<p class="card-text">ตำแหน่ง: ' . $row["position"] . '</p>';
                        echo '<p class="card-text">รักษาเฉพาะทาง: ' . $row["specialization"] . '</p>';
                        echo '<a href="doctor_profile.php" class="btn btn-primary">Profile</a>'; // แก้ไข URL Profile ตามต้องการ
                        echo '</div>';
                        echo '<div class="card-footer">';
                        echo '<small class="text-muted">Last updated 3 mins ago</small>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';

                        // ปิดแถวทุก 3 คน
                        if ($count % $max_per_row == $max_per_row - 1 || $count == $result->num_rows - 1) {
                            echo '</div>';
                            echo '<br>'; // เพิ่มการเว้นบรรทัด
                        }

                        $count++;
                    }
                } else {
                    echo "0 ผลลัพธ์";
                }
                ?>













                <!-- เรียกใช้ footer -->
                <?php require_once '../../footer.php' ?>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>


</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchForm = document.getElementById('searchForm');
        const searchInput = document.getElementById('searchInput');
        const cardDeck = document.getElementById('cardDeck');

        // Mock data of doctors
        const doctors = [{
                name: 'ดร. ณัฐพล วงศ์สมบูรณ์',
                workplace: 'โรงพยาบาลสุขภาพใจดี',
                position: 'ผู้อำนวยการแพทย์',
                specialty: 'โรคหัวใจและหลอดเลือด',
                profileUrl: 'doctor_profile.php'
            },
            // Add more doctors here
            {
                name: 'ดร. ประพจน์ สุขสมบูรณ์',
                workplace: 'ศูนย์การแพทย์ชั้นนำ',
                position: 'ศูนย์บริการโรคสมองและประสาท',
                specialty: 'โรคสมองและประสาท',
                profileUrl: 'doctor_profile.php'
            },
            {
                name: 'ดร. วิชัย ทองมี',
                workplace: 'โรงพยาบาลพื้นที่',
                position: 'หัวหน้าแผนกอายุรกรรม',
                specialty: 'โรคเรื้อนในผู้สูงอายุ',
                profileUrl: 'doctor_profile.php'
            },
            {
                name: 'ดร. สุรเดช รักษาอุปกรณ์',
                workplace: 'ศูนย์การรักษาอุปกรณ์',
                position: 'ผู้อำนวยการการแพทย์ผู้เชี่ยวชาญ',
                specialty: 'โการศึกษาและการบำบัดอุปกรณ์บริเวณข้อ',
                profileUrl: 'doctor_profile.php'
            },
            {
                name: 'ดร. อรรถพล สุขสุขสบาย',
                workplace: 'ศูนย์การรักษาอุปกรณ์',
                position: 'หัวหน้าแผนกกายภาพบำบัด',
                specialty: 'การฟื้นฟูสมรรถภาพทางกาย',
                profileUrl: 'doctor_profile.php'
            },
            {
                name: 'ดร. ณรงค์ฤทธิ์ สุขสมบูรณ์',
                workplace: 'โรงพยาบาลสุขภาพครอบครัว',
                position: 'แพทย์ผู้เชี่ยวชาญด้านสุขภาพจิต',
                specialty: 'การฟื้นฟูสมรรถภาพทางกาย',
                profileUrl: 'doctor_profile.php'
            },
        ];

        function renderDoctorCard(doctor) {
            return `
            <div class="card-ca">
                <div class="card">
                    <img src="cat.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">${doctor.name}</h5>
                        <p class="card-text">ตึกที่ทำงาน: ${doctor.workplace}</p>
                        <p class="card-text">ตำแหน่ง: ${doctor.position}</p>
                        <p class="card-text">รักษาเฉพาะทาง: ${doctor.specialty}</p>
                        <a href="${doctor.profileUrl}" class="btn btn-primary">Profile</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            `;
        }

        function filterDoctors(query) {
            const filteredDoctors = doctors.filter(doctor =>
                doctor.name.toLowerCase().includes(query.toLowerCase())
            );
            return filteredDoctors;
        }

        function displayFilteredDoctors(filteredDoctors) {
            const html = filteredDoctors.map(doctor => renderDoctorCard(doctor)).join('');
            cardDeck.innerHTML = html;
        }

        searchButton.addEventListener('click', function() {
            const query = searchInput.value.trim();
            const filteredDoctors = filterDoctors(query);
            displayFilteredDoctors(filteredDoctors);
        });
    });
</script>