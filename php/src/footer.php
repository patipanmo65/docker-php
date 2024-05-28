<?php
// กำหนด URL สำหรับแต่ละเมนู
$services_step_url = "/pages/services/steps-for-treatment.php";
$doctor_schedule_url = "/pages/services/doctor-schedule.php";
$special_services_url = "/pages/services/special-services.php";
$doctor_list_url = "/pages/services/doctor-list.php";

$about_about_url = "/pages/about/about.php";
$about_structure_url = "/pages/about/structure.php";
$about_vision_url = "/pages/about/vision-mission.php";
$about_strategic_url = "/pages/about/strategic-plan.php";
$about_projects_url = "/pages/about/projects-budget.php";
$about_awards_url = "/pages/about/awards-pride.php";
$about_activities_url = "./calendar.php";
$about_reports_url = "/pages/about/annual-reports.php";
$about_contact_url = "/pages/about/contact-us.php";

$medical_research_url = "/pages/medical/research-technology.php";
$medical_training_url = "/pages/medical/training-education.php";
$medical_rax_url = "/pages/medical/rax-checkpoint.php";
$medical_hosxp_structure_url = "/pages/medical/hosxp-structure-adjustment-documents.php";
$medical_hosxp_export_url = "/pages/medical/hosxp-2566-export-list.php";
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <!-- Link เข้ารหัส CSS ของ Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <meta name="theme-color" content="#563d7c" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- <link rel="stylesheet" href="footerstyle.css"> -->
    <!-- CSS สำหรับการลิงค์ -->

    <style>
        /* footerstyle.css */

        .footer {
            background-color: #5BA1E1;
            padding: 50px 0;
            color: white;
        }

        .link-list li {
            margin-bottom: 10px;
        }

        .link-list li a {
            color: white;
            text-decoration: none;
        }

        .link-list li a:hover {
            color: #0056b3;
        }

        .map-img {
            text-align: right;
        }

        /* .copy {
        background-color: #343a40;
        color: #f8f9fa;
        padding: 15px 0;
    } */

        .social-media-icons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .social-media-icon {
            margin: 0 10px;
            font-size: 24px;
            color: #343a40;
            transition: color 0.3s;
        }

        .social-media-icon:hover {
            color: #007bff;
        }



        /*Nav  */
        .navbar-brand {
            display: flex;
            align-items: center;
            /* margin-right: auto; */
            /* ชิดซ้าย */
        }

        /* ปรับระยะห่างของโลโก้จากขอบขวา */
        .navbar-brand {
            margin-right: 20px;

        }


        .navbar-brand {
            white-space: normal;
            word-wrap: break-word;
        }





        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 14px;
                /* ปรับขนาดตัวอักษรเมื่อหน้าจอมีขนาดเล็กกว่า 768px */
            }
        }

        @media (max-width: 576px) {
            .navbar-brand img {
                width: 25px;
                /* ปรับขนาดของโลโก้เมื่อหน้าจอมีขนาดเล็กกว่า 576px */
                height: 25px;
            }
        }

        .social-media-icons {
            display: flex;
            align-items: center;
            /* margin-left: auto; */
            /* ชิดขวา */
        }

        .social-media-icon {
            margin-right: 10px;
            /* ระยะห่างระหว่างไอคอน */
        }

        /* ปรับขนาดข้อความของ List Items ใน Footer ในขนาดหน้าจอที่เล็กกว่า */
        @media (max-width: 768px) {
            .link-list li {
                font-size: 14px;
            }
        }

        /* ปรับการจัดวางของข้อมูลใน Footer ในขนาดหน้าจอที่เล็กกว่า */
        @media (max-width: 576px) {
            .map-img {
                text-align: center;
            }
        }


        /* ปรับขนาดของ Social media icons ในขนาดหน้าจอที่เล็กกว่า */
        .social-media-icons {
            text-align: center;
        }

        .social-media-icon {
            display: inline-block;
            margin: 0 10px;
        }

        /* ปรับการจัดวางของข้อความใน Footer ในขนาดหน้าจอที่เล็กกว่า */
        @media (max-width: 768px) {
            .col-md-6 {
                text-align: center;
            }
        }
    </style>

</head>

<body>

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <!-- <div class="social-media-icons">
                        <a href="#" class="social-media-icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-media-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-media-icon"><i class="fab fa-line"></i></a>
                        

                    </div> -->
                    <a class="navbar-brand" href="index.php">
                        <img src="http://www.puahospital.go.th/wp-content/uploads/2019/11/cropped-loogo-600x745-242x300.png" width="30" height="30" class="d-inline-block align-center" alt="" loading="lazy">
                        Pua Crown Prince Hospital
                        โรงพยาบาลสมเด็จพระยุพราชปัว
                    </a>
                    <p> <br>
                        70 หมู่ 6 ถนนปัว-น้ำยาว ตำบลวรนคร อำเภอปัว จังหวัดน่าน 55120</p>
                </div>
                <div class="col-md-6 col-sm-12 map-img">
                    <!-- <h2>ข้อมูลการติดต่อ</h2> -->
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled link-list">
                                <li><a href="index.php" class="custom-link">หน้าเเรก</a> <i class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $services_step_url; ?>" class="custom-link">ขั้นตอนการเข้ารับการรักษา</a> <i class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $doctor_schedule_url; ?>" class="custom-link">ตารางเเพทย์ออกตรวจ</a> <i class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $special_services_url; ?>" class="custom-link">บริการเด่น</a> <i class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $doctor_list_url; ?>" class="custom-link">รายชื่อเเพทย์</a> <i class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $about_about_url; ?>" class="custom-link">ความเป็นมา</a> <i class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $about_structure_url; ?>" class="custom-link">โครงสร้างผู้บริหาร</a> <i class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled link-list">
                                <li><a href="<?php echo $about_vision_url; ?>" class="custom-link">วิสัยทัศน์
                                        พันธกิจ</a> <i class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $about_reports_url; ?>" class="custom-link">รายงานประจำปี</a> <i class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $medical_training_url; ?>" class="custom-link">การอบรมการศึกษา</a> <i class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $about_projects_url; ?>" class="custom-link">แผนโครงการ
                                        และงบประมาณ</a> <i class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $about_awards_url; ?>" class="custom-link">รางวัลเเละความภาคภูมิใจ</a> <i class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $about_activities_url; ?>" class="custom-link">ภาพกิจกรรม</a> <i class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                                <li><a href="<?php echo $about_reports_url; ?>" class="custom-link">ติดต่อเราข้อเสนอเเนะ</a> <i class="fa fa-angle-right" style="font-size: 14px;"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>



    <div class="copy text-center py-3 bg-primary text-white">
        <div class="container">
            <p>โรงพยาบาลสมเด็จพระยุพราชปัว Copyright © 2019. All rights reserved.</p>
        </div>
    </div>
</body>

</html>