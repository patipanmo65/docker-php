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

    <!-- stylesheet -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mali">
    <link rel="stylesheet" href="../../plugins/@sweetalert2/theme-bootstrap-4/bootstrap-4.css">
    <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">

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

    <?php include_once('../includes/sidebar.php') ?>

    <div class="flex-container">
        <div class="container">
            <div class="shadow rounded p-5 bg-body h-100">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 class="mb-5"> เกี่ยวกับ </h1>
                        <h3>เพิ่มรายการ</h3>
                        <form id="formData" class="row gy-4" action="php/create.php" method="POST"
                            enctype="multipart/form-data">

                            <div class="col-md-10">
                                <label for="date" class="form-label">วันที่</label>
                                <input type="date" class="form-control" id="date" name="date" placeholder="วันที่"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="title" class="form-label">เรื่อง</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="เรื่อง"
                                    required>
                            </div>
                            <div class="col-md-12">
                                <label for="content" class="form-label">เนื้อหา</label>
                                <textarea type="text" class="form-control" id="content" name="content"
                                    required></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="image" class="form-label">รูปภาพ</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*"
                                    required>
                            </div>
                            <!-- <div class="col-md-6">
                                <label for="pdf_file" class="form-label">ไฟล์ PDF</label>
                                <input type="file" class="form-control" id="pdf_file" name="pdf_file" accept=".pdf"
                                    required>
                            </div> -->
                            <div class="col-12">
                                <button type="submit" name="submit"
                                    class="btn btn-primary d-block mx-auto">บันทึกการเปลี่ยนแปลง</button>
                            </div>
                        </form>


                        <a href="./">ย้อนกลับ</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Javascript -->

    <!-- SCRIPTS -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../plugins/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="../../assets/js/adminlte.min.js"></script>

    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>