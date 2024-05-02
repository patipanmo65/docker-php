<?php

require_once('../authen.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ปฏิทิน กิจกรรม</title>


    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <meta name="theme-color" content="#563d7c" />

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

    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css' rel='stylesheet' />


    <style>
        #calendar {
            max-width: 900px;
            /* Set maximum width of calendar */
            margin: 0 auto;
            /* Center the calendar */
        }

        @media screen and (max-width: 768px) {
            #calendar {
                max-width: 100%;
                /* Set maximum width to full width on smaller screens */
                margin-left: 10px;
                /* Add some left margin on smaller screens */
                margin-right: 10px;
                /* Add some right margin on smaller screens */
            }
        }

        /* ribbins */
        #ribbin {
            width: 200px;
            height: 40px;
            position: relative;
            background: blue;
            color: #fff;
        }

        #ribbin:after {
            content: "";
            position: absolute;
            right: 0;
            bottom: 0;
            width: 0;
            height: 0;
            border-right: 20px solid white;
            border-top: 20px solid transparent;
            border-bottom: 20px solid transparent;
        }

        .postext {
            text-align: center;
            position: relative;
            top: 10px;
            right: 10px;
        }

        /* figgle */
        .figure {
            text-align: center;
        }

        .figure-caption {
            text-align: center;
        }


        /* Card */
        .card {
            display: flex;
            justify-content: center;
        }

        /* img */
        .center-image {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <div>
        <?php include_once('../includes/sidebar.php') ?>

        <br>



        <!-- ทดสอบ git add. git commit git push  -->



        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js'></script>

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

</body>

</html>