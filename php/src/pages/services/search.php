<?php
$servername = "db";
$username = "MYSQL_USER";
$password = "MYSQL_PASSWORD";
$database = "MYSQL_DATABASE";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Escape user input to prevent SQL injection
$searchTerm = $conn->real_escape_string($_POST['searchTerm']);

// Query to fetch data from the database
$sql = "SELECT * FROM doctors_list WHERE name LIKE '%$searchTerm%' OR hospital LIKE '%$searchTerm%' OR position LIKE '%$searchTerm%' OR specialization LIKE '%$searchTerm%'";

$result = $conn->query($sql);

?>



<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card mx-auto mb-3" style="width: 18rem; text-align: center;">'; // เพิ่ม mx-auto เพื่อจัดการ์ดอยู่ตรงกลาง และ mb-3 เพื่อเพิ่มระยะห่างด้านล่าง
        echo '<img src="cat.png" class="card-img-top" alt="...">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row["name"] . '</h5>';
        echo '<p class="card-text">Hospital: ' . $row["hospital"] . '</p>';
        echo '<p class="card-text">Position: ' . $row["position"] . '</p>';
        echo '<p class="card-text">Specialization: ' . $row["specialization"] . '</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No results found";
}
?>