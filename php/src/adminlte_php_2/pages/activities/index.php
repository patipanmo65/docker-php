<?php
require_once('../authen.php');

require_once('php/connect.php');
$sql = "SELECT * FROM activities";
$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เเก้ไขข้อมูล</title>
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
                    <div class="col-lg-10">
                        <h1 class="pb-4"> ข้อมูล </h1>
                        <a href="form-create.php" class="btn btn-primary">เพิ่มข้อมูล</a>
                        <span class="float-end">มีข้อมูลทั้งหมด <?php echo mysqli_num_rows($result) ?> รายการ
                        </span>
                    </div>

                    <div class="col-lg-10">
                        <div class="table-responsive">
                            <?php if (mysqli_num_rows($result) > 0) : ?>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="text-center text-light bg-dark">
                                            <!-- <th>#</th> -->
                                            <th>ชื่อเรื่อง</th>
                                            <th>เนื้อหา</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                            <tr class="text-center">
                                                <!-- <td> <?php //echo $row['id'] 
                                                            ?> </td> -->
                                                <td> <?php echo $row['title'] ?> </td>
                                                <td> <?php echo $row['content'] ?> </td>

                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['id'] ?>" style="width: 105px;"> รายละเอียด </button>
                                                        <a href="form-update.php?id=<?php echo $row['id'] ?>" class="btn btn-warning"> แก้ไข </a>
                                                        <a href="php/delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger"> ลบ </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade" id="my-modal<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">รายละเอียดสินค้า</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- <p>ชื่อเรื่อง: <?php //echo $row['name'] 
                                                                                ?></p> -->
                                                            <p>ชื่อ: <?php echo $row['title'] ?></p>
                                                            <p>เนื้อหา: <?php echo $row['content'] ?> </p>


                                                            <hr>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            <?php
                            else :
                                echo "<p class='mt-5'>ไม่มีข้อมูลในฐานข้อมูล</p>";
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <?php include_once('../includes/footer.php') ?>


    <!-- scripts -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="../../assets/js/adminlte.min.js"></script>
    <script src="../../plugins/bootstrap-toggle/bootstrap-toggle.min.js"></script>
    <script src="../../plugins/toastr/toastr.min.js"></script>

    <!-- datatables -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php mysqli_close($conn) ?>
</body>

</html>