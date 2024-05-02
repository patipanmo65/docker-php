<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการเพิ่ม/แก้ไขข้อมูลแพทย์ | AppzStory</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/hospital.png">
    <!-- stylesheet -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include_once('../includes/sidebar.php') ?>
        <div class="content-wrapper pt-3">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow">
                                <div class="card-header border-0 pt-4">
                                    <h4>
                                        <i class="fas fa-user-cog"></i>
                                        เพิ่ม/แก้ไขข้อมูลแพทย์
                                    </h4>
                                    <a href="./" class="btn btn-info my-3 ">
                                        <i class="fas fa-list"></i>
                                        กลับหน้าหลัก
                                    </a>
                                </div>
                                <form name="formCreate" action="../../service/doctor/update.php" method="POST" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 px-1 px-md-5">

                                                <div class="form-group">
                                                    <label for="first_name">ชื่อจริง</label>
                                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="ชื่อจริง" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="last_name">นามสกุล</label>
                                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="นามสกุล" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="hospital">โรงพยาบาล</label>
                                                    <input type="text" class="form-control" name="hospital" id="hospital" placeholder="โรงพยาบาล" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="position">ตำแหน่ง</label>
                                                    <input type="text" class="form-control" name="position" id="position" placeholder="ตำแหน่ง" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="specialization">การรักษา</label>
                                                    <input type="text" class="form-control" name="specialization" id="specialization" placeholder="การรักษา" required>
                                                </div>
                                                <input type="hidden" name="id" id="id" value="">
                                            </div>
                                            <div class="col-md-6 px-1 px-md-5">

                                                <div class="form-group">
                                                    <label for="customFile">รูปโปรไฟล์</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="file" id="customFile" accept="image/*">
                                                        <label class="custom-file-label" for="customFile">เลือกรูปภาพ</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-block mx-auto w-50" name="submit">บันทึกข้อมูล</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('../includes/footer.php') ?>
    </div>
    <!-- SCRIPTS -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="../../assets/js/adminlte.min.js"></script>
</body>

</html>