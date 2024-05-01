<?php

require_once('../authen.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Calendar</title>


    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <meta name="theme-color" content="#563d7c" />



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

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include_once('../includes/sidebar.php') ?>

        <br>
        <br>

        <div class="container">

            <h3>ปฏิทิน กิจกรรม รพร.</h3>
            <div class="container" id="ribbin">
                <p class="postext">ภาพกิจกรรม</p>
            </div>
            <br>
            <div class="text-center">
                <p>วันจันทร์ ที่ 18 มีนาคม 2567 ณ สนามกีฬาโรงเรียนปัว อ.ปัว จ.น่าน จังหวัดน่านจัดงาน</p>
            </div>
            <br>

            <img src="https://placehold.co/500x500" class="img-fluid center-image" alt="...">

            <br>
            <div class="text-center">
                <p> “เชิดชูเกียรติ อสม. จาก อสม.คุณภาพ สู่Health Rider” โดยมี นพ.ชลน่าน
                    ศรีแก้วรัฐมนตรีว่าการกระทรวงสาธารณสุข <br>
                    เป็นประธานเปิดงาน มอบเกียรติบัตรและเสื้อสามารถให้กับ อสม.ดีเด่นระดับจังหวัด ระดับเขตสุขภาพที่ 1
                    ระดับภาคเหนือ <br>
                    และระดับชาติ รวม 11 สาขา และมอบชุดอุปกรณ์ให้กับตัวแทน Health Rider ทั้ง 15 อำเภอ
                    เพื่อจัดยาส่งให้ผู้ป่วยถึงบ้าน <br>
                    ตามนโยบาย“ยกระดับ 30บาทรักษาทุกที่” โดยมี นพ.โอภาส การย์กวินพงศ์ ปลัดกระทรวงสาธารณสุข กล่าวรายงาน
                    <br>
                    และนายเทวา ปัญญาบุญ รองผู้ว่าราชการจังหวัดน่าน กล่าวต้อนรับ โดยมีผู้เข้าร่วมงานจำนวน 2,770 คน
                </p> <br>
            </div>



            <div class="text-center">
                <p>วันที่ 5 - 6 มีนาคม 2567 โรงพยาบาลสมเด็จพระยุพราชปัว </p>
            </div>
            <!-- <div class="item-center">

            <figure class="figure">
                <img src="https://placehold.co/500x500" class="figure-img img-fluid rounded" alt="...">
               
            </figure>
        </div> -->


            <!-- <div class="card" style="width: 18rem; height: 300px;">
            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                <img src="https://placehold.co/500x500" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <p class="card-text">Your text here</p>
            </div>
        </div> -->
            <img src="https://placehold.co/500x500" class="img-fluid center-image" alt="...">
            <br>
            <div class="text-center">
                <p> ได้จัดโครงการอบรม พรบ.คุ้มครองข้อมูลส่วนบุคคล (PDPA) ให้กับบุคลากรในโรงพยาบาล
                    และตัวแทนจากโรงพยาบาลชุมชนในจังหวัดน่าน โดยการอบรมครั้งนี้เราได้รับความกรุณาจาก อาจารย์วรวัฒน์
                    บุญนาค
                    และอาจารย์พนาพร เขตต์ภูมิเมือง จาก บริษัทโทรคมนาคมแห่งชาติ จำกัด (มหาชน)
                    มาบรรยายให้ความรู้กับผู้เข้าอบรม ทั้ง 2 วัน
                    เนื้อหามุ่งเน้นสำหรับการนำไปปฏิบัติกับการทำงานและการดำเนินชีวิตในยุคปัจจุบ้น
                    ในครั้งนี้ทางโรงพยาบาลสมเด็จพระยุพราชปัว ขอขอบคุณทีมวิทยากรที่มาให้ความรู้กับผู้เข้ารับการอบรมมา ณ
                    โอกาสนี้ด้วยค่ะ
                </p> <br>
            </div>

        </div>

    </div>
    <br>
    <br>
    <br>


    <!-- #region -->
    <div class="container">
        <h5>ตาราง กิจกรรม รพร.</h5>
    </div>
    <br>

    <div id='calendar'></div>
    <script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            defaultDate: '<?php echo date("Y-m-d"); ?>', // Set default date to today
            editable: false,
            eventLimit: true, // allow "more" link when too many events
            events: 'get_events.php' // PHP script to fetch events
        });
    });
    </script>



    <!-- ทดสอบ git add. git commit git push  -->



    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js'></script>



</body>

</html>