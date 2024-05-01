<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - โรงพยาบาลปัว</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .sidebar {
            background-color: #333;
            width: 250px;
            padding: 20px;
            color: #fff;
        }

        .container {
            max-width: 800px;
            margin: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 10px;
            border-bottom: 2px solid #4caf50;
            padding-bottom: 5px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 8px;
        }

        a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #4caf50;
        }

        .category {
            margin-bottom: 20px;
        }

        .category h2 {
            margin-bottom: 5px;
            padding-bottom: 5px;
            border-bottom: 1px solid #ddd;
        }

        .category ul {
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="category">
            <h2>เกี่ยวกับ</h2>
            <ul>
                <li><a href="edit/edit_about.php" target="_self">โรงพยาบาลปัว</a></li>
                <li><a href="edit/edit_vision_mission.php" target="_self">วิสัยทัศน์ พันธกิจ</a></li>
                <li><a href="edit/edit_strategy.php" target="_self">แผนยุทธศาสตร์ และตัวชี้วัด</a></li>
            </ul>
        </div>
        <div class="category">
            <h2>บุคลากร</h2>
            <ul>
                <li><a href="manager/add_executive.php" target="_self">เพิ่มผู้บริหาร</a></li>
                <li><a href="manager/edit_executive.php" target="_self">แก้ไขผู้บริหาร</a></li>
                <li><a href="manager/delete_executive.php" target="_self">ลบผู้บริหาร</a></li>
            </ul>
        </div>
        <div class="category">
            <h2>โครงการและรางวัล</h2>
            <ul>
                <li><a href="add_project.php" target="_self">แผนโครงการ และงบประมาณ</a></li>
                <li><a href="add_award.php" target="_self">รางวัลและความภาคภูมิใจ</a></li>
            </ul>
        </div>
        <div class="category">
            <h2>กิจกรรมและรายงาน</h2>
            <ul>
                <li><a href="add_gallery.php" target="_self">ภาพกิจกรรม</a></li>
                <li><a href="upload_annual_report.php" target="_self">รายงานประจำปี</a></li>
            </ul>
        </div>
        <div class="category">
            <h2>การแพทย์</h2>
            <ul>
                <li><a href="add_research.php" target="_self">วิจัยและเทคโนโลยีด้านการแพทย์</a></li>
                <li><a href="add_training.php" target="_self">การอบรมการศึกษา</a></li>
                <li><a href="add_rax_checkpoint.php" target="_self">Rax Check Point</a></li>
                <li><a href="add_hosxp_document.php" target="_self">เอกสารสำหรับปรับโครงสร้าง HOSXP 2566</a></li>
                <li><a href="add_export_hosxp.php" target="_self">รายการตามหมวด EXPORT HOSXP 2566</a></li>
            </ul>
        </div>
        <div class="category">
            <h2>ติดต่อ</h2>
            <ul>
                <li><a href="view_contact.php" target="_self">ดูข้อมูลติดต่อเรา</a></li>
                <li><a href="edit_contact.php" target="_self">แก้ไขข้อมูลติดต่อเรา</a></li>
                <li><a href="logout.php" target="_self">Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1>Admin - โรงพยาบาลปัว</h1>

    </div>





    <!--  -->
    <script>
        // Function to handle link clicks
        function handleLinkClick(event) {
            // Prevent default behavior of link click
            event.preventDefault();

            // Get the href attribute of the clicked link
            var href = event.target.getAttribute('href');

            // Check if href is for logout
            if (href === 'logout.php') {
                // Redirect to login page
                window.location.href = 'admin_login.php';
            } else {
                // Load the content of the link in the same page
                fetch(href)
                    .then(response => response.text())
                    .then(data => {
                        document.querySelector('.container').innerHTML = data;
                    })
                    .catch(error => console.error('Error:', error));
            }
        }

        // Add event listener to all links in the sidebar
        var sidebarLinks = document.querySelectorAll('.sidebar a');
        sidebarLinks.forEach(function(link) {
            link.addEventListener('click', handleLinkClick);
        });
    </script>



</body>

</html>