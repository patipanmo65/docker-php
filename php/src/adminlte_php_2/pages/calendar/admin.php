<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กิจกรรม</title>
</head>

<body>
    <h1>เพิ่ม กิจกรรม</h1>
    <form action="add_event.php" method="post">
        <label for="title">Event Title:</label><br>
        <input type="text" id="title" name="title" required><br><br>
        <label for="start_date">Start Date:</label><br>
        <input type="date" id="start_date" name="start_date" required><br><br>
        <label for="end_date">End Date:</label><br>
        <input type="date" id="end_date" name="end_date" required><br><br>
        <input type="submit" value="Add Event">
    </form>
</body>

</html>