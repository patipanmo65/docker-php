<!-- edit_vision_mission.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Vision & Mission - โรงพยาบาลปัว</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>แก้ไขวิสัยทัศน์ พันธกิจ</h1>
        <form method="post" action="update_vision_mission.php">
            <label for="vision">วิสัยทัศน์:</label><br>
            <textarea id="vision" name="vision" rows="4" cols="50"></textarea><br><br>
            <label for="mission">พันธกิจ:</label><br>
            <textarea id="mission" name="mission" rows="4" cols="50"></textarea><br><br>
            <input type="submit" value="บันทึก">
        </form>
    </div>
</body>

</html>