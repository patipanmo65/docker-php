<?php

require_once('php/connect.php');

// Check if 'id' is set in the URL
if (!isset($_GET['id'])) {
    header("location: ./");
    exit();
}

// Retrieve data for the selected ID
$id = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "SELECT * FROM awards WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูล</title>
    <!-- favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="icon.ico">
    <!-- Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .flex-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #F5F8FF;
        }
    </style>
</head>

<body>
    <div class="flex-container">
        <div class="container">
            <div class="shadow rounded p-5 bg-body h-100">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 class="mb-5">แก้ไขข้อมูล</h1>
                        <form class="row gy-4" action="php/update.php" method="POST">
                            <div class="col-md-12">
                                <label for="name" class="form-label">ชื่อเรื่อง</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="title" value="<?php echo $row['title']; ?>" required>
                            </div>
                            <!-- <div class="col-md-12">
                                <label for="detail" class="form-label">รายละเอียด</label>
                                <textarea type="text" class="form-control" id="detail" name="detail" rows="5" placeholder="รายละเอียด" required><?php //echo $row['content']; 
                                                                                                                                                ?></textarea>
                            </div> -->
                            <div class="col-md-6">
                                <label for="hospital" class="form-label">เนื้อหา</label>
                                <input type="text" class="form-control" id="content" name="content" placeholder="เนื้อหา" value="<?php echo $row['content']; ?>" required>
                            </div>
                            <!-- <div class="col-md-6">
                                <label for="position" class="form-label">ตำแหน่ง</label>
                                <input type="text" class="form-control" id="position" name="position" placeholder="ตำแหน่ง" value="<?php //echo $row['position']; 
                                                                                                                                    ?>" required>
                            </div> -->
                            <!-- <div class="col-md-6">
                                <label for="specialization" class="form-label">แผนก</label>
                                <input type="text" class="form-control" id="specialization" name="specialization"
                                    placeholder="แผนก" value="<?php //echo $row['specialization']; 
                                                                ?>" required>
                            </div> -->
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-primary d-block mx-auto">บันทึกการเปลี่ยนแปลง</button>
                            </div>
                        </form>
                        <a href="./">ย้อนกลับ</a>
                    </div>
                </div>
            </div>
            <p class="fw-bolder text-secondary text-center">
                ผู้เขียน: Yothin Sapsamran <span class="text-danger fs-3" style="vertical-align: sub;">♥️</span>
                <a class="border-bottom border-2 border-primary text-decoration-none" href="https://appzstory.dev"> Jame
                    AppzStory Studio</a>
            </p>
        </div>
    </div>

    <!-- Javascript -->
    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>