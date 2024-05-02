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

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>

</head>


<body>

    <!-- เรียกใช้ header -->
    <?php require_once '../../nav.php' ?>



    <!-- <div class="container">
        <form class="form-inline mt-2 mt-md-0 ml-auto" id="searchForm">
            <input class="form-control mr-sm-2" type="text" id="searchInput" placeholder="Search Doctors"
                aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="button" id="searchButton">Search</button>
            <br>
            <div class="container">
                <div class="card-deck" id="cardDeck">
                    <br>
                </div>
                <br> -->





    <div class="container">
        <form class="form-inline mt-2 mt-md-0 ml-auto" id="searchForm">
            <input class="form-control mr-sm-2" type="text" id="searchInput" placeholder="Search Doctors" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="button" id="searchButton">Search</button>
        </form>
        <br>
        <div class="container">
            <div class="card-deck" id="cardDeck">
                <br>
            </div>
        </div>
    </div>

    <?php
    // Assuming $result is already populated with data from your database query

    if ($result->num_rows > 0) {
        $count = 0; // Initialize count variable

        while ($row = $result->fetch_assoc()) {
            // Start a new row every 3 doctors
            if ($count % 3 == 0) {
                echo '<div class="row">';
            }

            echo '<div class="col-md-4">';
            echo '<div class="card">';
            echo '<img src="cat.png" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row["name"] . '</h5>';
            echo '<p class="card-text">Hospital: ' . $row["hospital"] . '</p>';
            echo '<p class="card-text">Position: ' . $row["position"] . '</p>';


            echo '<p class="card-text">Specialization: ' . $row["specialization"] . '</p>';
            echo '<a href="doctor_profile.php?id=' . $row["id"] . '" class="btn btn-primary">Profile</a>';
            echo '</div>';
            echo '<div class="card-footer">';
            echo '<small class="text-muted">Last updated 3 mins ago</small>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            // Close the row every 3 doctors or at the end of results
            if ($count % 3 == 2 || $count == $result->num_rows - 1) {
                echo '</div>'; // Close the row
                echo '<br>'; // Add line break
            }

            $count++; // Increment count
        }
    } else {
        echo "0 results";
    }
    ?>
    <br>











    <!-- เรียกใช้ footer -->
    <?php require_once '../../footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>


</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchButton = document.getElementById('searchButton');
        const searchInput = document.getElementById('searchInput');
        const cardDeck = document.getElementById('cardDeck');

        searchButton.addEventListener('click', function() {
            const searchTerm = searchInput.value.trim();

            // Create a new XMLHttpRequest object
            const xhr = new XMLHttpRequest();

            // Check if search term is empty
            if (searchTerm === "") {
                alert("กรุณากรอกชื่อก่อนที่จะค้นหา");
                return; // Stop further execution
            }

            // Configure the request
            xhr.open('POST', 'search.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            // Define what happens on successful data submission
            xhr.onload = function() {
                if (xhr.status === 200) {
                    cardDeck.innerHTML = xhr.responseText;
                }
            };

            // Define what happens in case of error
            xhr.onerror = function() {
                console.log('Request failed');
            };

            // Send the request and include the search term as data
            xhr.send('searchTerm=' + searchTerm);
        });
    });
</script>