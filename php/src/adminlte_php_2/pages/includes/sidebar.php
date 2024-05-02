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
        <li class="nav-item d-md-block d-none">
            <a class="nav-link">เข้าสู่ระบบครั้งล่าสุด: <?php echo $_SESSION['AD_LOGIN'] ?> </a>
        </li>
    </ul>
</nav>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="../dashboard/" class="brand-link">
        <img src="../../assets/images/hospital.png" alt="Admin Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Hospital Admin</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../assets/images/avatar.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="../manager/" class="d-block">
                    <?php echo $_SESSION['AD_FIRSTNAME'] . ' ' . $_SESSION['AD_LASTNAME'] ?> </a>
            </div>
        </div>
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
                <li class="nav-item">
                    <a href="../blankpage/" class="nav-link <?php echo isActive('blankpage') ?>">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>ตารางเเพทย์ </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../calendar/" class="nav-link <?php echo isActive('calendar') ?>">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>ปฏิทินกิจกรรม</p>
                    </a>
                </li>
                <!-- menu about -->
                <li class="nav-item">
                    <a href="../about/" class="nav-link <?php echo isActive('about') ?>">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>เกี่ยวกับ</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../medical/" class="nav-link <?php echo isActive('medical') ?>">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>merdical</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../services/" class="nav-link <?php echo isActive('services') ?>">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>servives</p>
                    </a>
                </li>




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