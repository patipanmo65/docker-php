<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เพิ่มข้อมูลแพทย์ออกตรวจ | Hospital</title>
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
                                        เพิ่มข้อมูลแพทย์ออกตรวจ
                                    </h4>
                                    <a href="./" class="btn btn-info mt-3">
                                        <i class="fas fa-list"></i>
                                        กลับหน้าหลัก
                                    </a>
                                </div>
                                <form id="formData">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-6 px-1 px-md-5">

                                                <div class="form-group">
                                                    <label for="name">ชื่อ-สกุล แพทย์</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="ชื่อ-สกุล แพทย์" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="position">ตำแหน่ง</label>
                                                    <input type="text" class="form-control" name="position"
                                                        id="position" placeholder="ตำแหน่ง" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="date">วันที่ออกตรวจ</label>
                                                    <input type="date" class="form-control" name="date" id="date"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="time">เวลาออกตรวจ</label>
                                                    <input type="time" class="form-control" name="time" id="time"
                                                        required>
                                                </div>

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
    $(function() {
        $('#formData').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '../../service/doctor/checkup.php',
                data: $('#formData').serialize()
            }).done(function(resp) {
                Swal.fire({
                    text: 'บันทึกข้อมูลเรียบร้อย',
                    icon: 'success',
                    confirmButtonText: 'ตกลง',
                }).then((result) => {
                    location.assign('./');
                });
            })
        });
    });
    </script>

</body>

</html>