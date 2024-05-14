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
                        <form class="row gy-4" action="php/create.php" method="POST" enctype="multipart/form-data">
                            <div class="col-md-6">
                                <label for="ชื่อ" class="form-label">ชื่อ</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ" required>
                            </div>
                            <div class="col-md-10">
                                <label for="email" class="form-label">อีเมลล์</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="อีเมลล์" required>
                            </div>

                            <div class="col-md-12">
                                <label for="message" class="form-label">ข้อความ</label>
                                <textarea type="ข้อความ" class="form-control" id="message" name="message" required></textarea>
                            </div>
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