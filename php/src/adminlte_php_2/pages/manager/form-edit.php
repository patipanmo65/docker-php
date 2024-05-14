<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Doctor - โรงพยาบาลปัว</title>
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
                                        <i class="fas fa-user-md"></i>
                                        แก้ไขข้อมูลแพทย์
                                    </h4>
                                    <a href="./" class="btn btn-info my-3 ">
                                        <i class="fas fa-list"></i>
                                        กลับหน้าหลัก
                                    </a>
                                </div>
                                <form id="formData" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 px-1 px-md-5">
                                                <div class="form-group">
                                                    <label for="name">ชื่อ-สกุล</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="ชื่อ-สกุล" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="position">ตำแหน่ง</label>
                                                    <input type="text" class="form-control" name="position"
                                                        id="position" placeholder="ตำแหน่ง" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="bio">ประวัติ</label>
                                                    <textarea class="form-control" name="bio" id="bio" rows="4"
                                                        placeholder="ประวัติ"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 px-1 px-md-5">
                                                <!-- <div class="form-group">
                                                    <label for="customFile">รูปภาพ</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile"
                                                            name="image" accept="image/*">
                                                        <label class="custom-file-label"
                                                            for="customFile">เลือกรูปภาพ</label>
                                                    </div>
                                                    <img src="../../assets/images/avatar5.png" alt="Profile Image"
                                                        class="img-fluid p-3" id="imagePreview">
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-block mx-auto w-50"
                                            name="submit">บันทึกข้อมูล</button>
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

    <script>
    $(document).ready(function() {
        // Image preview
        $('#customFile').change(function() {
            var inputFile = $(this);
            var files = inputFile.get(0).files;
            if (files && files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').attr('src', e.target.result);
                }
                reader.readAsDataURL(files[0]);
            }
        });

        // Form submission
        $('#formData').submit(function(e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            $.ajax({
                type: 'POST',
                url: 'update_doctor.php',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    Swal.fire({
                        text: 'อัพเดทข้อมูลเรียบร้อย',
                        icon: 'success',
                        confirmButtonText: 'ตกลง',
                    }).then((result) => {
                        location.assign('./');
                    });
                }
            });
        });
    });
    </script>

</body>

</html>