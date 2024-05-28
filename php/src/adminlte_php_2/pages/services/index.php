<?php

require_once('../authen.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include_once('../includes/sidebar.php') ?>

        <div class="flex-container">
            <div class="container">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <div class="table table-bordered">
                            <th>รายละเอียด</th>
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
    <!-- <script src="../../plugins/chart.js/Chart.min.js"></script>
    <script>
        $(function() {
            function renderChart(chartType = 'bar') {
                var data = JSON.parse('<?php echo $response_json ?>');
                var label = data.response.label;
                var myChart = new Chart($('#chart'), {
                    type: chartType,
                    data: {
                        labels: data.response.labels,
                        datasets: [{
                            label: label,
                            data: data.response.results,
                            backgroundColor: '#007bff88',
                            borderColor: '#007bff',
                            borderWidth: 3,
                            datalabels: {
                                align: 'end',
                                anchor: 'end'
                            },
                        }]
                    },
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
                            display: false //ทำให้ป้ายหัวข้อหาย
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
                })
            }
            renderChart('bar')
        })
    </script> -->

</body>
< </html>