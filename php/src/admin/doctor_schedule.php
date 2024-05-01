<?php
// Connect to database
$conn = mysqli_connect("db", "MYSQL_USER", "MYSQL_PASSWORD", "MYSQL_DATABASE");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $doctor_name = $_POST['doctor_name'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "INSERT INTO doctor_schedule (doctor_name, date, time) VALUES ('$doctor_name', '$date', '$time')";

    if (mysqli_query($conn, $sql)) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the connection
mysqli_close($conn);
?>

<!-- HTML form for doctor's schedule -->
<form method="post">
    Doctor Name: <input type="text" name="doctor_name"><br>
    Date: <input type="date" name="date"><br>
    Time: <input type="time" name="time"><br>
    <input type="submit" value="Add">
</form>

<?php
// Display records from database
$conn = mysqli_connect("db", "MYSQL_USER", "MYSQL_PASSWORD", "MYSQL_DATABASE");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM doctor_schedule";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Doctor Schedules</h2>";
    echo "<table border='1'>
            <tr>
                <th>Doctor Name</th>
                <th>Date</th>
                <th>Time</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['doctor_name'] . "</td>
                <td>" . $row['date'] . "</td>
                <td>" . $row['time'] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No records found";
}

mysqli_close($conn);
?>