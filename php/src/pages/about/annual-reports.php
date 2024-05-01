<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Hospital Landing page" />
    <meta name="author" content="Abhishek Keshri" />
    <title>บริการของเรา</title>



    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.0/html2pdf.bundle.min.js"></script>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <meta name="theme-color" content="#563d7c" />


    <!-- Custom styles for this template -->


</head>

<body>
    <!-- เรียกใช้ nav -->
    <?php require_once '../../nav.php' ?>






    <main>

        <div class="container">
            <figure class="figure">
                <img src="https://placehold.co/1536x500" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">A caption for the above image.</figcaption>
            </figure>

            <br>



            <h4 class="text-center">รายงานประจำปี</h4>


            <h4>ประจำปี พ.ศ</h4>
            <!-- <button onclick="generatePDF()">ดาวน์โหลดเป็น PDF</button>
            <div id="content">
                <h1>ข้อความที่จะแปลงเป็น PDF</h1>
                <p>ข้อความเพิ่มเติม...</p>
            </div> -->
            <!-- <a href="#" id="pdfLink">ดาวน์โหลดเป็น PDF</a>

            <div id="content">
                <h1>ข้อความที่จะแปลงเป็น PDF</h1>
                <p>ข้อความเพิ่มเติม...</p>
            </div> -->



            <!-- download -->

            <a href="#" id="pdfLink">3 มิ.ย. 2562 รายงานสถานการณ์ด้านการเงินการคลัง โรงพยาบาลจังหวัดน่าน</a> <br>
            <a href="#" id="pdfLink">8 มิ.ย. 2561 รายงานสถานการณ์ด้านการเงินการคลัง โรงพยาบาลจังหวัดน่าน</a>






        </div>
    </main>
    <br>
























    <!-- เรียกใช้ footer -->

    <?php require "../../footer.php" ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <!-- <script>
        function generatePDF() {
            const element = document.getElementById("content"); // เลือกองค์ประกอบ HTML ที่ต้องการแปลงเป็น PDF
            html2pdf()
                .from(element)
                .save();
        }
    </script> -->


    <!-- <script>
        // เรียกใช้ฟังก์ชันเมื่อหน้าเว็บโหลดเสร็จ
        window.onload = function() {
            // เลือกลิงก์ที่มี id เป็น "pdfLink"
            var pdfLink = document.getElementById('pdfLink');
            // เพิ่มฟังก์ชันเมื่อคลิกลิงก์
            pdfLink.onclick = function() {
                // เรียกใช้ฟังก์ชันสร้าง PDF
                generatePDF();
            }
        }

        // ฟังก์ชันสร้าง PDF
        function generatePDF() {
            const element = document.getElementById("content"); // เลือกองค์ประกอบ HTML ที่ต้องการแปลงเป็น PDF
            html2pdf()
                .from(element)
                .save();
        }
    </script> -->


    <script>
    // การเรียกใช้ฟังก์ชันเมื่อหน้าเว็บโหลดเสร็จ
    window.onload = function() {
        // เลือกลิงก์ที่มี id เป็น "pdfLink"
        var pdfLink = document.getElementById('pdfLink');
        // เพิ่มฟังก์ชันเมื่อคลิกลิงก์
        pdfLink.onclick = function() {
            // เปิดไฟล์ PDF ในหน้าเว็บไซต์
            window.open('example.pdf', '_blank');
            // ยกเลิกการทำงานของลิงก์
            return false;
        }
    }
    </script>

</body>


</html>