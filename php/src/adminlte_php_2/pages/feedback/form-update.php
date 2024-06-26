<?php

require_once('php/connect.php');

// Check if 'id' is set in the URL
if (!isset($_GET['id'])) {
    header("location: ./");
    exit();
}

// Retrieve data for the selected ID
$id = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "SELECT * FROM feedback WHERE id = '$id'";
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
    <!-- stylesheet -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="../../plugins/bootstrap-toggle/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- Datatables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <script>
        // ป้องกันการกดปุ่มย้อนกลับบนเบราว์เซอร์
        window.history.pushState(null, null, window.location.href);
        window.onpopstate = function(event) {
            history.go(1);
        };
    </script>
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
                        <h1 class="mb-5">แก้ไขข้อมูล</h1>
                        <form class="row gy-4" action="php/update.php" method="POST" enctype="multipart/form-data">
                            <div class="col-md-12">
                                <label for="name" class="form-label">ชื่อ</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อเรื่อง" value="<?php echo $row['name']; ?>" required>
                            </div>

                            <div class="col-md-6">
                                <label for="content" class="form-label">อีเมลล์</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="อีเมลล์" value="<?php echo $row['email']; ?>" required>
                            </div>
                            <div class="col-md-12">
                                <label for="feedback" class="form-label">ความพึงพอใจ</label>
                                <input type="text" class="form-control" id="feedback" name="feedback" placeholder="ความพึงพอใจ" value="<?php echo $row['feedback']; ?>" required>
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
    <!-- SCRIPTS -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../plugins/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="../../assets/js/adminlte.min.js"></script>

    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>