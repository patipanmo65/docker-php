<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Executive - โรงพยาบาลปัว</title>
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
        <h1>เพิ่มผู้บริหาร</h1>
        <form method="post" action="insert_executive.php">
            <label for="name">ชื่อ:</label><br>
            <input type="text" id="name" name="name" required><br><br>
            <label for="position">ตำแหน่ง:</label><br>
            <input type="text" id="position" name="position" required><br><br>
            <label for="bio">ประวัติ:</label><br>
            <textarea id="bio" name="bio" rows="4" cols="50"></textarea><br><br>
            <input type="submit" value="เพิ่มผู้บริหาร">
        </form>
    </div>
</body>

</html>