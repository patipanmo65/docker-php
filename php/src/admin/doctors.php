<?php
// Connect to database
$conn = mysqli_connect("db", "MYSQL_USER", "MYSQL_PASSWORD", "MYSQL_DATABASE");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch doctors data
$sql = "SELECT * FROM doctors";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Specialty</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['specialty']}</td></tr>";
}
echo "</table>";

mysqli_close($conn);
