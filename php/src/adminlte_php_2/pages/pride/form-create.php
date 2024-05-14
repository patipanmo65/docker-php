<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เกี่ยวกับ</title>
    <!-- favicons -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="icon.ico"> -->
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
                        <h1 class="mb-5"> เกี่ยวกับ </h1>
                        <h3>เพิ่มรายการ</h3>
                        <form class="row gy-4" action="php/create.php" method="POST">
                            <div class="col-md-6">
                                <label for="title" class="form-label">ชื่อเรื่อง</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="ชื่อเรื่อง" required>
                            </div>

                            <div class="col-md-12">
                                <label for="content" class="form-label">เนื้อหา</label>
                                <textarea type="text" class="form-control" id="content" name="content" placeholder="เนื้อหา" required></textarea>
                            </div>

                            <div class="col-md-6">
                                <label for="image" class="form-label">รูปภาพ</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>

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