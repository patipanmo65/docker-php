<?php

require_once('./php/connect.php'); // เรียกใช้การเชื่อมต่อฐานข้อมูล
require_once('../authen.php');

// ดึงข้อมูลจากฐานข้อมูลสำหรับแต่ละตาราง
$sql1 = "SELECT COUNT(*) as total FROM annual_reports";
$result1 = $conn->query($sql1);
$totalReports = $result1->fetch_assoc()['total'];

$sql2 = "SELECT COUNT(*) as total FROM activities"; // เปลี่ยน table2 เป็นชื่อของตารางที่ต้องการ
$result2 = $conn->query($sql2);
$totalReports2 = $result2->fetch_assoc()['total'];

$sql3 = "SELECT COUNT(*) as total FROM news"; // เปลี่ยน table3 เป็นชื่อของตารางที่ต้องการ
$result3 = $conn->query($sql3);
$totalReports3 = $result3->fetch_assoc()['total'];

$sql4 = "SELECT COUNT(*) as total FROM feedback"; // เปลี่ยน table4 เป็นชื่อของตารางที่ต้องการ
$result4 = $conn->query($sql4);
$totalReports4 = $result4->fetch_assoc()['total'];

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>หน้าหลัก | Hospital</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/hospital.png">
    <!-- stylesheet -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
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
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info shadow">
                                <div class="inner text-center">
                                    <h1 class="py-3">&nbsp;รายชื่อเเพทย์&nbsp;</h1>
                                </div>
                                <a href="../manager/" class="small-box-footer py-3"> คลิกจัดการข้อมูล <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-primary shadow">
                                <div class="inner text-center">
                                    <h1 class="py-3">&nbsp;กิจกรรม&nbsp;</h1>
                                </div>
                                <a href="../activities/" class="small-box-footer py-3"> คลิกจัดการระบบ <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-success shadow">
                                <div class="inner text-center">
                                    <h1 class="py-3">ข่าว</h1>
                                </div>
                                <a href="../news/" class="small-box-footer py-3"> คลิกจัดการระบบ <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info shadow">
                                <div class="inner text-center">
                                    <h1 class="py-3">inbox</h1>
                                </div>
                                <a href="../feedback/" class="small-box-footer py-3"> คลิกจัดการระบบ <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- contents -->

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="small-box py-3 bg-white shadow">
                                <div class="inner">
                                    <h3><?php echo number_format($totalReports); ?> รายการ</h3>
                                    <p class="text-danger">รวมข้อมูลทั้งหมด</p>
                                </div>
                                <div class="icon">
                                    <!-- <i class="fas fa-chart-bar"></i> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="small-box py-3 bg-white shadow">
                                <div class="inner">
                                    <h3><?php echo number_format($totalReports2); ?> รายการ</h3>
                                    <p class="text-danger">ข้อมูลทั้งหมด</p>
                                </div>
                                <div class="icon">
                                    <!-- <i class="fas fa-chart-bar"></i> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="small-box py-3 bg-white shadow">
                                <div class="inner">
                                    <h3><?php echo number_format($totalReports3); ?> รายการ</h3>
                                    <p class="text-danger">ข้อมูลทั้งหมด</p>
                                </div>
                                <div class="icon">
                                    <!-- <i class="fas fa-chart-bar"></i> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="small-box py-3 bg-white shadow">
                                <div class="inner">
                                    <h3><?php echo number_format($totalReports4); ?> รายการ</h3>
                                    <p class="text-danger">ข้อมูลทั้งหมด</p>
                                </div>
                                <div class="icon">
                                    <!-- <i class="fas fa-chart-bar"></i> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <p class="d-flex flex-column">
                                            <span class="text-bold text-xl">1000</span>
                                            <span class="text-danger">ข่าววันนี้</span>
                                        </p>
                                    </div>
                                    <div class="position-relative">
                                        <canvas id="chart" height="350"></canvas>
                                    </div>
                                </div>
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
    <script src="../../assets/js/adminlte.min.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="../../plugins/chart.js/Chart.min.js"></script>
    <script>
    $(function() {
        function renderChart(chartType = 'bar', dataLabels = [], dataValues = []) {
            // ใช้ข้อมูลจำนวนที่ดึงมาจากฐานข้อมูลแทนที่ข้อมูลสุ่ม
            var data = {
                labels: dataLabels,
                datasets: [{
                    label: 'จำนวนรายการ',
                    data: dataValues,
                    backgroundColor: '#007bff88',
                    borderColor: '#007bff',
                    borderWidth: 3,
                    datalabels: {
                        align: 'end',
                        anchor: 'end'
                    },
                }]
            };

            var myChart = new Chart($('#chart'), {
                type: chartType,
                data: data,
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    layout: {
                        padding: {
                            top: 32,
                            right: 20,
                            bottom: 0,
                            left: 8
                        }
                    },
                    legend: {
                        display: false // ทำให้ป้ายหัวข้อหาย
                    },
                    scales: {
                        yAxes: [{
                            gridLines: {
                                display: true,
                            },
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                        xAxes: [{
                            gridLines: {
                                display: true
                            }
                        }]
                    }
                }
            });
        }

        // สร้าง array เก็บข้อมูลรายการและจำนวนรายการ
        var labels = [' รายชื่อเเพทย์ ', 'กิจกรรม', 'ข่าว', 'inbox']; // เปลี่ยนเป็นชื่อรายงานที่ต้องการ
        var values = [<?php echo $totalReports; ?>, <?php echo $totalReports2; ?>,
            <?php echo $totalReports3; ?>, <?php echo $totalReports4; ?>
        ]; // ใช้ค่าจำนวนที่ดึงมาจากฐานข้อมูล

        renderChart('bar', labels, values); // เรียกใช้ฟังก์ชัน renderChart เพื่อแสดงกราฟ
    });
    </script>

</body>

</html>