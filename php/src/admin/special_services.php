<?php
// Connect to database
$conn = mysqli_connect("db", "MYSQL_USER", "MYSQL_PASSWORD", "MYSQL_DATABASE");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $service_name = $_POST['service_name'];
    $description = $_POST['description'];

    $sql = "INSERT INTO special_services (service_name, description) VALUES ('$service_name', '$description')";

    if (mysqli_query($conn, $sql)) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!-- HTML form for special services -->
<form method="post">
    Service Name: <input type="text" name="service_name"><br>
    Description: <textarea name="description"></textarea><br>
    <input type="submit" value="Add">
</form>