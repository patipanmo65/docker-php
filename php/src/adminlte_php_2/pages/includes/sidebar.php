<?php
function isActive($data)
{
    $array = explode('/', $_SERVER['REQUEST_URI']);
    $key = array_search("pages", $array);
    $name = $array[$key + 1];
    return $name === $data ? 'active' : '';
}
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars fa-2x"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto ">
        <li class="nav-item d-md-none d-block">
            <a href="../dashboard/">
                <img src="../../assets/images/hospital.png" alt="Admin Logo" width="50px"
                    class="img-circle elevation-3">
                <span class="font-weight-light pl-1">Hospital Admin</span>
            </a>
        </li>
        <!-- <li class="nav-item d-md-block d-none">
            <a class="nav-link">เข้าสู่ระบบครั้งล่าสุด: <?php echo $_SESSION['AD_LOGIN'] ?> </a>
        </li> -->
    </ul>
</nav>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="../dashboard/" class="brand-link">
        <img src="../../assets/images/hospital.png" alt="Admin Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Hospital Admin</span>
    </a>
    <div class="sidebar">
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../assets/images/avatar.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="../manager/" class="d-block">
                    <?php echo $_SESSION['AD_FIRSTNAME'] . ' ' . $_SESSION['AD_LASTNAME'] ?> </a>
            </div>
        </div> -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="../dashboard/" class="nav-link <?php echo isActive('dashboard') ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>หน้าหลัก</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../manager/" class="nav-link <?php echo isActive('manager') ?>">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>รายชื่อเเพทย์</p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="../blankpage/" class="nav-link <?php echo isActive('blankpage') ?>">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>ตารางเเพทย์ </p>
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="../calendar/" class="nav-link <?php echo isActive('calendar') ?>">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>ปฏิทินกิจกรรม</p>
                    </a>
                </li> -->
                <!-- menu about -->
                <li class="nav-item">
                    <a href="../about/" class="nav-link <?php echo isActive('about') ?>">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>เกี่ยวกับ</p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="../medical/" class="nav-link <?php //echo isActive('medical') 
                                                            ?>">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>แพทย์</p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="../services/" class="nav-link <?php echo isActive('services') ?>">
                        <i class="nav-icon fas fa-receipt"></i>
                        <p>บริการ</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../activities/" class="nav-link <?php echo isActive('activities') ?>">
                        <i class="nav-icon fas fa-flask"></i>
                        <p>กิจกรรม</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../annual_reports/" class="nav-link <?php echo isActive('annual_reports') ?>">
                        <i class="nav-icon fas fa-memory"></i>
                        <p>รายงานประจำปี</p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="../services/" class="nav-link <?php echo isActive('services') ?>">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>awords</p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="../biddingannouncements/" class="nav-link <?php echo isActive('biddingannouncements') ?>">
                        <i class="nav-icon fas fa-laptop-medical"></i>
                        <p>การประมูล</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../awards/" class="nav-link <?php echo isActive('awards') ?>">
                        <i class="nav-icon fas fa-memory""></i>
                        <p>ความภาคภูมิใจ</p>
                    </a>
                </li>
                <li class=" nav-item">
                            <a href="../budgets/" class="nav-link <?php echo isActive('budgets') ?>">
                                <i class="nav-icon fas fa-memory"></i>
                                <p>รางวัลเเละความภาคภูมิใจ</p>
                            </a>
                </li>
                <li class="nav-item">
                    <a href="../contact_us/" class="nav-link <?php echo isActive('contact_us') ?>">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>ติดต่อ สอบถาม</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../export_hosxp_2566/" class="nav-link <?php echo isActive('export_hosxp_2566') ?>">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>รายการตามหมวด</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../feedback/" class="nav-link <?php echo isActive('feedback') ?>">
                        <i class="nav-icon fas fa-comment"></i>
                        <p>ความคิดเห็น</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../history/" class="nav-link <?php echo isActive('history') ?>">
                        <i class="nav-icon fas fa-file"></i>
                        <p>ความเป็นมา</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../hpsxp_documents/" class="nav-link <?php echo isActive('hpsxp_documents') ?>">
                        <i class="nav-icon fas fa-file"></i>
                        <p>เอกสารสำหรับปรับโครงสร้าง</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../medical_research/" class="nav-link <?php echo isActive('medical_research') ?>">
                        <i class="nav-icon fas fa-file"></i>
                        <p>การวิจัยทางการแพทย์</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../news/" class="nav-link <?php echo isActive('news') ?>">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>ข่าว</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../pride/" class="nav-link <?php echo isActive('pride') ?>">
                        <i class="nav-icon fas fa-gift"></i>
                        <p>ความภาคภูมิใจ</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../projects/" class="nav-link <?php echo isActive('projects') ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>โปรเจค</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../strategy/" class="nav-link <?php echo isActive('strategy') ?>">
                        <i class="nav-icon fas fa-hand-holding-heart"></i>
                        <p>ความภาคภูมิใจ</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../training_education/" class="nav-link <?php echo isActive('training_education') ?>">
                        <i class="n     av-icon fas fa-user-cog"></i>
                        <p>การอบรมการศึกษา</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../health_news/" class="nav-link <?php echo isActive('health_news') ?>">
                        <i class="n     av-icon fas fa-user-cog"></i>
                        <p>ข่าวสุขภาพ</p>
                    </a>
                </li>


                <!-- profile -->

                <li class="nav-header">บัญชีของเรา</li>
                <li class="nav-item">
                    <a href="../logout.php" id="logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>ออกจากระบบ</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>