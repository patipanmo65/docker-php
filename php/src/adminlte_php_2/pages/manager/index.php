<?php


require_once('../authen.php');


?>


<!-- <?php //require_once '../../service/connect.php' 
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการรายชื่อเเพทย์ | Hospital</title>
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
                                        รายชื่อเเพทย์
                                    </h4>
                                    <!-- <a href="form-create.php" class="btn btn-primary mt-3">
                                        <i class="fas fa-plus"></i>
                                        เพิ่มข้อมูล
                                    </a> -->
                                </div>
                                <div class="card-body">
                                    <table id="logs" class="table table-hover" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ลำดับ</th>
                                                <th>ชื่อ</th>
                                                <th>โรงพยาบาล</th>
                                                <th>ตำเเหน่ง</th>
                                                <th>การรักษา</th>
                                                <!-- <th>ใช้งานล่าสุด</th> -->
                                                <!-- <th>สิทธิ์เข้าใช้งาน</th> -->
                                                <th>รูปภาพ</th>
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
                                                    echo "<td> {$num} </td>";
                                                    echo "<td> {$row['name']} </td>";
                                                    echo "<td> {$row['hospital']} </td>";
                                                    echo "<td> {$row['position']} </td>";
                                                    echo "<td> {$row['specialization']} </td>";
                                                    echo "<td> {$row['images']} </td>";
                                                    // echo "<td> {$row['updated_at']} </td>";
                                                    echo "<td> 
            <a href='form-edit.php?id={$row['id']}' type='button' class='btn btn-warning text-white'>
                <i class='far fa-edit'></i> แก้ไข
            </a>
            <button type='button' class='btn btn-danger' id='delete' data-id='{$row['id']}' data-index='{$row['id']}'>
                <i class='far fa-trash-alt'></i> ลบ
            </button>
        </td>";
                                                    echo "</tr>";
                                                }
                                            } else {
                                                echo "ไม่พบข้อมูล";
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
        // แสดงผลการทำงานสำเร็จด้วย sweet alert
        if (window.location.search.includes('?delete=success')) {
            Swal.fire("รายการของคุณถูกลบเรียบร้อย", "", "success");
            history.replaceState(null, null, window.location.pathname);
        }

        $(function() {
            $('#logs').DataTable({
                initComplete: function() {
                    $(document).on('click', '#delete', function() {
                        let id = $(this).data('id')
                        Swal.fire({
                            text: "คุณแน่ใจหรือไม่...ที่จะลบรายการนี้?",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'ใช่! ลบเลย',
                            cancelButtonText: 'ยกเลิก'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href =
                                    `../../service/manager/delete.php?id=${id}`;
                            }
                        })
                    })
                },
                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal({
                            header: function(row) {
                                var data = row.data()
                                return 'ผู้ใช้งาน: ' + data[1]
                            }
                        }),
                        renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                            tableClass: 'table'
                        })
                    }
                },
                language: {
                    "lengthMenu": "แสดงข้อมูล _MENU_ แถว",
                    "zeroRecords": "ไม่พบข้อมูลที่ต้องการ",
                    "info": "แสดงหน้า _PAGE_ จาก _PAGES_",
                    "infoEmpty": "ไม่พบข้อมูลที่ต้องการ",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": 'ค้นหา'
                }
            })
        })
    </script>

</body>

</html>