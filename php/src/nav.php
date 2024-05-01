<?php
function generateNavbar(
    $services_step_url,
    $doctor_schedule_url,
    $special_services_url,
    $doctor_list_url,
    $about_about_url,
    $about_structure_url,
    $about_vision_url,
    $about_strategic_url,
    $about_projects_url,
    $about_awards_url,
    $about_activities_url,
    $about_reports_url,
    $about_contact_url,
    $medical_research_url,
    $medical_training_url,
    $medical_rax_url,
    $medical_hosxp_structure_url,
    $medical_hosxp_export_url
) {
?>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="http://www.puahospital.go.th/wp-content/uploads/2019/11/cropped-loogo-600x745-242x300.png"
                width="30" height="30" class="d-inline-block align-center" alt="" loading="lazy" />
            โรงพยาบาลสมเด็จพระยุพราชปัว
        </a>
        <button class="navbar-toggler navbar-toggler-start" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        บริการของเรา
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item"
                                href="<?php echo $services_step_url; ?>">ขั้นตอนการเข้ารับการรักษา</a></li>
                        <li><a class="dropdown-item" href="<?php echo $doctor_schedule_url; ?>">ตารางแพทย์ออกตรวจ</a>
                        </li>
                        <li><a class="dropdown-item" href="<?php echo $special_services_url; ?>">Special Services</a>
                        </li>
                        <li><a class="dropdown-item" href="<?php echo $doctor_list_url; ?>">รายชื่อแพทย์</a></li>
                        <li><a href="./admin/admin_login.php" class="dropdown-item">เข้าสู่หน้า Admin</a></li>
                        <li><a href="./adminlte_php_2/login.php" class="dropdown-item">เข้าสู่หน้า Admin2</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        เกี่ยวกับ รพร.ปัว
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="<?php echo $about_about_url; ?>">เกี่ยวกับ รพร.ปัว</a></li>
                        <li><a class="dropdown-item" href="<?php echo $about_structure_url; ?>">โครงสร้างผู้บริหาร</a>
                        </li>
                        <li><a class="dropdown-item" href="<?php echo $about_vision_url; ?>">วิสัยทัศน์ พันธกิจ</a></li>
                        <li><a class="dropdown-item" href="<?php echo $about_strategic_url; ?>">แผนยุทธศาสตร์
                                และตัวชี้วัด</a></li>
                        <li><a class="dropdown-item" href="<?php echo $about_projects_url; ?>">แผนโครงการ
                                และงบประมาณ</a></li>
                        <li><a class="dropdown-item" href="<?php echo $about_awards_url; ?>">รางวัลและความภาคภูมิใจ</a>
                        </li>
                        <li><a class="dropdown-item" href="<?php echo $about_activities_url; ?>">ภาพกิจกรรม</a></li>
                        <li><a class="dropdown-item" href="<?php echo $about_reports_url; ?>">รายงานประจำปี</a></li>
                        <li><a class="dropdown-item" href="<?php echo $about_contact_url; ?>">ติดต่อเรา/ข้อเสนอแนะ</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        สำหรับบุคลากรทางการแพทย์
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item"
                                href="<?php echo $medical_research_url; ?>">วิจัยและเทคโนโลยีด้านการแพทย์</a></li>
                        <li><a class="dropdown-item" href="<?php echo $medical_training_url; ?>">การอบรมการศึกษา</a>
                        </li>
                        <li><a class="dropdown-item" href="<?php echo $medical_rax_url; ?>">Rax Check Point</a></li>
                        <li><a class="dropdown-item"
                                href="<?php echo $medical_hosxp_structure_url; ?>">เอกสารสำหรับปรับโครงสร้าง HOSXP
                                2566</a></li>
                        <li><a class="dropdown-item" href="<?php echo $medical_hosxp_export_url; ?>">รายการตามหมวด
                                EXPORT HOSXP 2566</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--css -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <meta name="theme-color" content="#563d7c" />
    <!-- <link rel="stylesheet" href="headerstyle.css"> -->

    <style>
    @import url("https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@500&display=swap");

    /* CSS styles for navbar */
    /* .navbar {
        background-color: #f8f9fa;
        padding-top: 12px;
        padding-bottom: 12px;
        display: flex;
        justify-content: space-between;
    } */

    .navbar-brand {
        color: #0056b3 !important;
        display: flex;
        align-items: center;
        font-family: "IBM Plex Sans Thai", sans-serif;
    }

    .navbar-brand img {
        width: 50px;
        height: auto;
        margin-right: 10px;
        margin-left: 20px;
        transition: transform 0.3s;
        cursor: pointer;
    }

    .navbar-brand:hover {
        color: #007bff;
    }

    .navbar-nav .nav-link:hover {
        color: #007bff;
        font-size: 18px;
        margin-right: 20px;
        margin-left: 20px;
        font-family: "IBM Plex Sans Thai", sans-serif;
    }

    .navbar-nav .nav-link {
        color: #0056b3 !important;
    }

    .nav-item {
        margin-left: 25px;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(52, 58, 64, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
    </style>

</head>

<body>
    <div class="container bg-light">
        <?php
        // Define URL for each menu item
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
        $about_activities_url = "/calendar.php"; // Fix the link
        $about_reports_url = "/pages/about/annual-reports.php";
        $about_contact_url = "/pages/about/contact-us.php";

        $medical_research_url = "/pages/medical/research-technology.php";
        $medical_training_url = "/pages/medical/training-education.php";
        $medical_rax_url = "/pages/medical/rax-checkpoint.php";
        $medical_hosxp_structure_url = "/pages/medical/hosxp-structure-adjustment-documents.php";
        $medical_hosxp_export_url = "/pages/medical/hosxp-2566-export-list.php";

        // Call the function to generate the navbar
        generateNavbar(
            $services_step_url,
            $doctor_schedule_url,
            $special_services_url,
            $doctor_list_url,
            $about_about_url,
            $about_structure_url,
            $about_vision_url,
            $about_strategic_url,
            $about_projects_url,
            $about_awards_url,
            $about_activities_url,
            $about_reports_url,
            $about_contact_url,
            $medical_research_url,
            $medical_training_url,
            $medical_rax_url,
            $medical_hosxp_structure_url,
            $medical_hosxp_export_url
        );
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>