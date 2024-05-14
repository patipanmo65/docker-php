<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เกี่ยวกับ</title>

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
                                <input type="text" class="form-control" id="title" name="title" placeholder="ชื่อเรื่อง"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <label for="content" class="form-label">เนื้อหา</label>
                                <textarea type="text" class="form-control" id="content" name="content"
                                    placeholder="เนื้อหา" required></textarea>
                            </div>

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

    <!-- Javascript -->

    <!-- Summernote -->
    <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#details').summernote({
            callbacks: {
                onImageUpload: function(files) {
                    for (let i = 0; i < files.length; i++) {
                        $.upload(files[i]);
                    }
                }
            },
            height: 600
        });
        $('#formData').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'PUT',
                url: '../../../service/update.php',
                data: $('#formData').serialize()
            }).done(function(resp) {
                Swal.fire({
                    text: 'อัพเดทข้อมูลเรียบร้อย',
                    icon: 'success',
                    confirmButtonText: 'ตกลง',
                }).then((result) => {
                    location.assign('index.php');
                });
            })
        });
    });
    </script>
    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>