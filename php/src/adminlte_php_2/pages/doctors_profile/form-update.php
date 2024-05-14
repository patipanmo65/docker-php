<?php

require_once('php/connect.php');

// Check if 'id' is set in the URL
if (!isset($_GET['id'])) {
    header("location: ./");
    exit();
}

// Retrieve data for the selected ID
$id = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "SELECT * FROM doctors_profile WHERE id = '$id'";
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
                        <form class="row gy-4" action="php/update.php" method="POST" enctype="multipart/form-data">
                            <div class="col-md-6">
                                <label for="name" class="form-label">ชื่อ</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ" value="<?php echo $row['name']; ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="image" class="form-label">รูปภาพ</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">เบอร์โทร</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="เบอร์โทร" value="<?php echo $row['phone']; ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="specialization" class="form-label">แผนก</label>
                                <input type="text" class="form-control" id="specialization" name="specialization" placeholder="แผนก" value="<?php echo $row['specialization']; ?>" required>
                            </div>
                            <div class="col-md-12">
                                <label for="education_history" class="form-label">การศึกษา</label>
                                <input type="text" class="form-control" id="education_history" name="education_history" placeholder="การศึกษา" value="<?php echo $row['education_history']; ?>" required>
                            </div>
                            <div class="col-md-12">
                                <label for="certification" class="form-label">วุฒิบัตร</label>
                                <input type="text" class="form-control" id="certification" name="certification" placeholder="วุฒิบัตร" value="<?php echo $row['certification']; ?>" required>
                            </div>
                            <div class="col-md-12">
                                <label for="work_experience" class="form-label">ประสบการณ์</label>
                                <input type="text" class="form-control" id="work_experience" name="work_experience" placeholder="ประสบการณ์" value="<?php echo $row['work_experience']; ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="Time_Business" class="form-label">เวลาทำการ</label>
                                <input type="text" class="form-control" id="Time_Business" name="Time_Business" placeholder="เวลาทำการ" value="<?php echo $row['Time_Business']; ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="work" class="form-label">ตึก</label>
                                <input type="text" class="form-control" id="work" name="work" placeholder="ตึก" value="<?php echo $row['work']; ?>" required>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-primary d-block mx-auto">บันทึกการเปลี่ยนแปลง</button>
                            </div>
                        </form>


                        <a href="./">ย้อนกลับ</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Javascript -->
    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>