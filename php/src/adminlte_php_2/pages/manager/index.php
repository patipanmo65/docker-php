<?php

require_once('../authen.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการรายชื่อแพทย์ | Hospital</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/hospital.png">
    <!-- stylesheet -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
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
                                        รายชื่อแพทย์
                                    </h4>
                                    <a href="form-create.php" class="btn btn-primary mt-3">
                                        <i class="fas fa-plus"></i>
                                        เพิ่มข้อมูล
                                    </a>
                                </div>
                                <div class="card-body">
                                    <table id="logs" class="table table-hover" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ลำดับ</th>
                                                <th>ชื่อ</th>
                                                <th>โรงพยาบาล</th>
                                                <th>ตำแหน่ง</th>
                                                <th>การรักษา</th>
                                                <th>รูปภาพ</th>
                                                <th>ตัวเลือก</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // เชื่อมต่อกับฐานข้อมูล
                                            $servername = "db";
                                            $username = "MYSQL_USER";
                                            $password = "MYSQL_PASSWORD";
                                            $dbname = "MYSQL_DATABASE";

                                            $conn = new mysqli($servername, $username, $password, $dbname);
                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }

                                            // คำสั่ง SQL สำหรับดึงข้อมูล
                                            $sql = "SELECT * FROM doctors_list"; // แทน your_table ด้วยชื่อตารางของคุณ

                                            $result = $conn->query($sql);

                                            if ($result === false) {
                                                die("Error executing query: " . $conn->error);
                                            }

                                            if ($result->num_rows > 0) {
                                                $num = 0;
                                                while ($row = $result->fetch_assoc()) {
                                                    $num++;
                                                    echo "<tr>";
                                                    echo "<td>{$num}</td>";
                                                    echo "<td>{$row['name']}</td>";
                                                    echo "<td>{$row['hospital']}</td>";
                                                    echo "<td>{$row['position']}</td>";
                                                    echo "<td>{$row['specialization']}</td>";
                                                    echo "<td>{$row['images']}</td>";
                                                    echo "<td> 
                                                            <a href='form-edit.php?id={$row['id']}' type='button' class='btn btn-warning text-white'>
                                                                <i class='far fa-edit'></i> แก้ไข
                                                            </a>
                                                            <button type='button' class='btn btn-danger delete' data-id='{$row['id']}'>
                                                                <i class='far fa-trash-alt'></i> ลบ
                                                            </button>
                                                        </td>";
                                                    echo "</tr>";
                                                }
                                            } else {
                                                echo "<tr><td colspan='7'>ไม่พบข้อมูล</td></tr>";
                                            }

                                            $conn->close();
                                            ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('../includes/footer.php') ?>
    </div>

    <!-- scripts -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="../../assets/js/adminlte.min.js"></script>

    <!-- datatables -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            // แสดง Sweet Alert เมื่อคลิกที่ปุ่มลบ
            $('.delete').click(function() {
                var id = $(this).data('id');
                Swal.fire({
                    text: "คุณแน่ใจหรือไม่ที่จะลบรายการนี้?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'ใช่! ลบเลย',
                    cancelButtonText: 'ยกเลิก'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // ส่งคำร้องขอลบไปยังหน้า delete.php พร้อมกับรหัส ID
                        window.location.href = `delete.php?id=${id}`;
                    }
                })
            });
        });
    </script>

</body>

</html>