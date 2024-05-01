<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Hospital Landing page" />
    <meta name="author" content="" />
    <title>โรงพยาบาลสมเด็จพระยุพราชปัว</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <meta name="theme-color" content="#563d7c" />


    <!-- Custom styles for this template -->
    <link href="style/home.css" rel="stylesheet" />

</head>

<body>

    <?php require_once 'nav.php' ?>




    <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://www.puahospital.go.th/wp-content/uploads/2023/12/405333895_736872355153679_4013414099186887279_n.jpg"
                        class="img-responsive" />
                    <div class="carousel-caption">
                        <div class="container">

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="http://www.puahospital.go.th/wp-content/uploads/2023/12/2023120702.png"
                        class="img-responsive" />
                    <div class="carousel-caption">
                        <div class="container">

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="http://www.puahospital.go.th/wp-content/uploads/2023/12/405166521_736872388487009_4880090658364807048_n.jpg"
                        class="img-responsive" />
                    <div class="carousel-caption">
                        <div class="container">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="http://www.puahospital.go.th/wp-content/uploads/2023/12/405204503_736872325153682_2880091393100128885_n.jpg"
                        class="img-responsive" />
                    <div class="carousel-caption">
                        <div class="container">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </main>

    <div class="d-none d-md-block container-fluid course-bg">
        <!-- ข่าวประชาสัมพันธ์ -->
        <div class="container">
            <h3>ข่าวประชาสัมพันธ์</h2>

                <br>
                <!-- New Course Style -->
                <!-- TODO: Make CourseCarousel Friendly Support on Mobile -->
                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel carouselCourse slide carousel-multi-item"
                    data-ride="carousel">

                    <div class="d-none">
                        <!--Controls-->
                        <div class="controls-top">
                            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i
                                    class="fas fa-chevron-left"></i></a>
                            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                        <!--/.Controls-->
                    </div>

                    <!--ส่วนข่าวเเนะนำ #fc6504  #007bff-->
                    <ol class="carousel-indicators">
                        <li data-target="#multi-item-example" data-slide-to="0" class="active"
                            style="background-color: #007bff"></li>
                        <li data-target="#multi-item-example" data-slide-to="1" style="background-color: #007bff"></li>

                    </ol>
                    <!--/.Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                            <div class="col-md-4" style="float:left">
                                <div class="card card-cascade wider mb-2">
                                    <div class="view view-cascade">
                                        <img class="card-img-top"
                                            src="http://www.puahospital.go.th/wp-content/uploads/2021/08/395505539_1411033859635999_646817923116112939_n-350x262.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card-body card-body-cascade">
                                        <div class="card-text">
                                            <a class="btn-floating blue"
                                                href="https://www.facebook.com/PCPHNAN/?locale=th_TH" target="_blank"><i
                                                    class="fab fa-facebook"></i></a><a
                                                href="https://www.facebook.com/PCPHNAN/?locale=th_TH"
                                                target="_blank">โรงพยาบาลสมเด็จพระยุพราชปัว</a><br>
                                            <a class="btn-floating green" href="tel:054 719 614"><i
                                                    class="fas fa-phone"></i></a><a href="tel:054 719 614"> 054 719
                                                614</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="float:left">
                                <div class="card card-cascade wider mb-2">
                                    <div class="view view-cascade">
                                        <img class="card-img-top"
                                            src="http://www.puahospital.go.th/wp-content/uploads/2023/11/400429868_1418981112174607_3647372880840204901_n.jpg"
                                            alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                    <div class="card-body card-body-cascade">
                                        <h4 class="card-title">โรงพยาบาลสมเด็จพระยุพราชปัว มีบริการจัดส่งยาถึงบ้าน/h4>
                                            <!-- <h5><span class="badge badge-smd z-depth-0">มัธยมศึกษาตอนต้น</span></h5> -->
                                            <div class="collapse-content">
                                                <p class="card-text collapse" id="pNormalCollapse">
                                                    โรงพยาบาลสมเด็จพระยุพราชปัว มีบริการจัดส่งยาถึงบ้าน
                                                    ***สิทธิบัตรทองฟรี ไม่มีค่าใช้จ่ายได้ทั่วประเทศ***
                                                    สิทธิอื่น ๆ จัดส่งด้วยพัสดุ 55 บ้าน ทั่วประเทศ
                                                </p>
                                                <a class="btn btn-flat text-smd p-1 my-1 mr-0 mml-1 collapsed"
                                                    data-toggle="collapse" href="#pNormalCollapse" aria-expanded="false"
                                                    aria-controls="collapseContent"></a>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="float:left">
                                <div class="card card-cascade wider mb-2">
                                    <div class="view view-cascade">
                                        <img class="card-img-top"
                                            src="http://www.puahospital.go.th/wp-content/uploads/2023/11/394562771_1411032742969444_1267544575422092356_n-1024x683.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card-body card-body-cascade">
                                        <h4 class="card-title">การพัฒนาและออกแบบระบบสุขภาพดิจิทัล นโยบายกระทรวงสาธารณสุข
                                            พ.ศ.2567</h4>
                                        <!-- <h5><span class="badge badge-smd z-depth-0">มัธยมศึกษาตอนต้น</span></h5> -->
                                        <div class="collapse-content">
                                            <p class="card-text collapse" id="pJEMSCollapse">
                                                วันศุกร์ ที่ 27 ตุลาคม 2566 เวลา 14.00 น. นายแพทย์กิติศักดิ์
                                                เกษตรสินสมบัติ
                                                ผู้อำนวยการโรงพยาบาลสมเด็จพระยุพราชปัว นายชัยวุฒิ วันควร
                                                สาธารณสุขอำเภอปัว
                                                นำคณะเจ้าหน้าที่รับการตรวจเยี่ยม จาก ดร.นพ.พงศธร พอกเพิ่มดี</p>
                                            <a class="btn btn-flat text-smd p-1 my-1 mr-0 mml-1 collapsed"
                                                data-toggle="collapse" href="#pJEMSCollapse" aria-expanded="false"
                                                aria-controls="collapseContent"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">

                            <div class="col-md-4" style="float:left">
                                <div class="card card-cascade wider mb-2">
                                    <div class="view view-cascade">
                                        <img class="card-img-top"
                                            src="http://www.puahospital.go.th/wp-content/uploads/2023/11/403829237_1424408531631865_3279844154145166541_n-1024x683.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card-body card-body-cascade">
                                        <h4 class="card-title">ต้อนรับคณะศึกษาดูงานจากโรงพยาบาลชุมชนในจังหวัดน่าน
                                            เข้าศึกษาดูงานการพัฒนาโรงพยาบาลอัจฉริยะ (Smart hospital)</h4>
                                        <!-- <h5><span class="badge red z-depth-0">มัธยมศึกษาตอนปลาย</span></h5> -->
                                        <div class="collapse-content">
                                            <p class="card-text collapse" id="sNormalCollapse">
                                                วันที่ 16-17 พฤศจิกายน 2566 กลุ่มงานประกันสุขภาพยุทธศาสตร์
                                                และสารสนเทศทางการแพทย์ โรงพยาบาลสมเด็จพระยุพราชปัว</p>
                                            <a class="btn btn-flat text-smd p-1 my-1 mr-0 mml-1 collapsed"
                                                data-toggle="collapse" href="#sNormalCollapse" aria-expanded="false"
                                                aria-controls="collapseContent"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="float:left">
                                <div class="card card-cascade wider mb-2">
                                    <div class="view view-cascade">
                                        <img class="card-img-top"
                                            src="http://www.puahospital.go.th/wp-content/uploads/2021/04/00001-01-682x1024.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card-body card-body-cascade">
                                        <h4 class="card-title">“วัคซีนแห่งความหวัง”วัคซีนโควิด 19
                                            เริ่มฉีดแล้วที่อำเภอปัว
                                        </h4>
                                        <!-- <h5><span class="badge red z-depth-0">มัธยมศึกษาตอนปลาย</span></h5> -->
                                        <div class="collapse-content">
                                            <p class="card-text collapse" id="sSEMSCollapse">
                                                “วัคซีนแห่งความหวัง” เริ่มฉีดแล้วที่อำเภอปัว
                                                วันที่ 5 เมษายน 2564 เวลา 09.00 น. คปสอ.ปัว นำโดย นายแพทย์กิติศักดิ์
                                                เกษตรสินสมบัติ ผู้อำนวยการโรงพยาบาลสมเด็จพระยุพราชปัว นายอัชฌาวัฒน์
                                                สมบัติ
                                                สาธารณสุขอำเภอปัว นำทีมกลุ่มบุคลากรทางการแพทย์และสาธารณสุข
                                                ฉีดวัคซีนป้องกันโรคโควิด 19 แก่ อาสาสมัครสาธารณสุขประจำหมู่บ้าน(อสม.)
                                                และบุคลากรทางการแพทย์และสาธารณสุข ตามเป้าหมาย จำนวน 170 คน
                                                ในเบื้องต้นไม่พบผลข้างเคียงหลังการฉีด</p>
                                            <a class="btn btn-flat text-smd p-1 my-1 mr-0 mml-1 collapsed"
                                                data-toggle="collapse" href="#sSEMSCollapse" aria-expanded="false"
                                                aria-controls="collapseContent"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="float:left">
                                <div class="card card-cascade wider mb-2">
                                    <div class="view view-cascade">
                                        <img class="card-img-top"
                                            src="http://www.puahospital.go.th/wp-content/uploads/2020/07/5-768x512.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card-body card-body-cascade">
                                        <h4 class="card-title">กิจกรรมจิตอาสาพัฒนา ในวันพฤหัสบดี ที่ 23 กรกฎาคม 2563
                                        </h4>
                                        <!-- <h5><span class="badge red z-depth-0">มัธยมศึกษาตอนปลาย</span></h5> -->
                                        <div class="collapse-content">
                                            <p class="card-text collapse" id="sSCiUSCollapse">
                                                อำเภอปัว พร้อมด้วยโรงพยาบาลสมเด็จพระยุพราชปัว หน่วยงานราชการ
                                                และประชาชนจิตอาสาพระราชทาน ได้จัดกิจกรรมจิตอาสาพัฒนา ปรับปรุงภูมิทัศน์
                                                ทำความสะอาด บริเวณพื้นที่ภายในโรงพยาบาล
                                                เนื่องในช่วงเดือนวันคล้ายวันพระบรมราชสมภพ พระบาทสมเด็จพระเจ้าอยู่หัว( 28
                                                กรกฎาคม)
                                                เพื่อให้ประชาชนทุกภาคส่วนได้ร่วมแสดงความจงรักภักดีและน้อมรำลึกในพระมหากรุณาธิคุณ

                                                โดย นายชนาธิป เสมแย้ม นายอำเภอปัว เป็นประธานในพิธีเปิด เวลา 09.00น. ณ
                                                โรงพยาบาลสมเด็จพระยุพราชปัว ในวันพฤหัสบดี ที่ 23 กรกฎาคม 2563</p>
                                            <a class="btn btn-flat text-smd p-1 my-1 mr-0 mml-1 collapsed"
                                                data-toggle="collapse" href="#sSCiUSCollapse" aria-expanded="false"
                                                aria-controls="collapseContent"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.Second slide-->
                    </div>
                    <!--/.Slides-->
                </div>
                <!--/.Carousel Wrapper-->
                <!-- New Course Style -->
        </div>

    </div>



    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-4 col-xl-3">
                <div class="d-none d-md-block card mt-3 mb-3 float-center">
                    <img class="card-img-top"
                        src="https://image.bangkokbiznews.com/image/kt/media/image/fileupload/source/chulalak/9467334575484.jpg?1551879241889?x-image-process=style/lg-webp" />
                </div>
                <div class="d-none d-xl-block fb-page mb-3" data-href="https://www.facebook.com/PCPHNAN/?locale=th_TH"
                    data-tabs="timeline" data-width="300" data-height="550" data-small-header="false"
                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/PCPHNAN/?locale=th_TH" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/PCPHNAN/?locale=th_TH">โรงพยาบาลสมเด็จพระยุพราชปัว จ.น่าน
                        </a>
                    </blockquote>
                </div>
                <div class="card mb-3">
                    <div class="hoverable view">
                        <div class="card-body">
                            <iframe src="https://maps.app.goo.gl/a8gbiBScfxxauPpW9" width="98%" frameborder="0"
                                style="border:0;" allowfullscreen=""></iframe>
                            <p class="card-text"><u>ที่อยู่</u> โรงพยาบาลสมเด็จพระยุพราชปัว 70ม.6 ต.วรนคร, Pua,
                                Thailand, Nan</p>
                            <p class="card-text"><u>โทรศัพท์</u> <a href="tel:054 719 614">054 719 614</a>
                                / 054-719613 / 054-719615 / FAX.054-719618
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v7.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>






    </div>
    <br>
    <br>
    <br>
    <br>
    <!-- card  -->
    <!-- <div class="container">
        <h4>ข่าวสารสุขภาพ</h4> <br>
        <div class="card-deck" style="overflow-x: auto; overflow-scroll: auto; white-space: nowrap;">
            <div class="card card-md" style="display: inline-block;">

                <img src="https://placehold.co/350x262" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with .</p>

                </div>
            </div>
            <div class="card card-md" style="display: inline-block;">
                <img src="https://placehold.co/350x262" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text
                    </p>

                </div>
            </div>
            <div class="card card-md" style="display: inline-block;">
                <img src="https://placehold.co/350x262" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with.</p>

                </div>
            </div>
            <div class="card card-md" style="display: inline-block;">
                <img src="https://placehold.co/350x262" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting
                        .</p>

                </div>
            </div>

        </div>

    </div> -->

    <br> <br>




    <!-- table -->
    <div class="table-container">
        <table class="table">
            <h4>ประกาศประกวดราคา สอบราคา</h4>
            <br>

            <tbody>
                <tr>
                    <th scope="row">17 มกราคม 2567</th>
                    <td><a href="#">ประกาศผลผู้ชนะการจัดซื้อจัดจ้างหรือผู้ได้รับการคัดเลือก
                            และสาระสำคัญของสัญญาหรือข้อตกลงเป็นหนังสือ ประจำไตรมาสที่ 1 ปีงบประมาณ 2567</a></td>
                    <!-- <td><a href="#">Otto</a></td>
                    <td><a href="#">@mdo</a></td> -->
                </tr>
                <tr>
                    <th scope="row">24 พฤศจิกายน 2566</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาจ้างก่อสร้างปรับปรุงห้องผ่าตัด OR4
                            และห้องพักฟื้นพร้อมระบบปรับอากาศและระบายอากาศ โรงพยาบาลสมเด็จพระยุพราชปัว จำนวน 1 รายการ
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (ebidding)</a></td>
                    <!-- <td><a href="#">Thornton</a></td>
                    <td><a href="#">@fat</a></td> -->
                </tr>
                <tr>
                    <th scope="row">12 ตุลาคม 2566</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาจ้างก่อสร้างปรับปรุงและต่อเติมอาคารและโครงสร้างคสล. 1 ชั้น
                            สำหรับอาคารผู้ป่วยนอก โรงพยาบาลสมเด็จพระยุพราชปัว จำนวน 1 รายการ
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (ebidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">22 กันยายน 2566</th>
                    <td><a href="#">ร่างประกาศจังหวัดน่าน เรื่อง ประกวดราคาก่อสร้างปรับปรุงห้องผ่าตัด OR4
                            และห้องพักฟื้นพร้อมระบบปรับอากาศและระบายอากาศ โรงพยาบาลสมเด็จพระยุพราชปัว จำนวน 1 รายการ</a>
                    </td>

                </tr>
                <tr>
                    <th scope="row">20 กันยายน 2566</th>
                    <td><a href="#"> ประกาศผู้ชนะการเสนอราคาซื้อ ครุภัณฑ์วิทยาศาสตร์และการแพทย์ จำนวน 1 รายการ
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (ebidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">22 สิงหาคม 2566</th>
                    <td><a href="#">ร่างประกาศจังหวัดน่าน เรื่อง ประกวดราคาจ้างเหมาบริการฟอกเลือดผู้ป่วยโรคไต
                            ด้วยเครื่องไตเทียม โรงพยาบาลสมเด็จพระยุพราชปัว อำเภอปัว จังหวัดน่าน จำนวน 1 รายการ</a></td>

                </tr>
                <tr>
                    <th scope="row">11 กรกฎาคม 2566</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาซื้อ ครุภัณฑ์คอมพิวเตอร์ จำนวน 4 รายการ
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (ebidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">27 มิถุนายน 2566</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาซื้อ ครุภัณฑ์วิทยาศาสตร์และการแพทย์ จำนวน 1 รายการ
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">26 มิถุนายน 2566</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาซื้อ ครุภัณฑ์วิทยาศาสตร์และการแพทย์ จำนวน 1 รายการ
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">19 มิถุนายน 2566</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาจ้างเหมาทำความสะอาดอาคารภายในโรงพยาบาลสมเด็จพระยุพราชปัว
                            จำนวน 1 รายการ ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (ebidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">28 เมษายน 2566</th>
                    <td><a href="#">
                            ประกาศผู้ชนะการเสนอราคาเครื่องตรวจหาสารชีวเคมีในเลือดและสารคัดหลั่งอัตโนมัติพร้อมน้ำยา จำนวน
                            23 รายการ ประจำปีงบประมาณ 2566 โดยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">2 มีนาคม 2566</th>
                    <td><a href="#">ยกเลิกประกาศ ประกวดราคาจ้างเหมาทำความสะอาดอาคารภายในโรงพยาบาลสมเด็จพระยุพราชปัว
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">15 ธันวาคม 2565</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาเช่าเครื่องตรวจทางภูมิคุ้มกันวิทยาอัตโนมัติ พร้อมน้ำยา จำนวน
                            9 รายการ ประจำปีงบประมาณ 2566 โดยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">4 สิงหาคม 2565</th>
                    <td><a href="#">ประกาศเผยแพร่แผนการจัดซื้อจัดจ้าง ประจำปีงบประมาณ พ.ศ. 2565</a></td>

                </tr>
                <tr>
                    <th scope="row">3 สิงหาคม 2565</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาจัดซื้อครุภัณฑ์คอมพิวเตอร์ จำนวน ๒ รายการ
                            โดยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)</a></td>

                </tr>


            </tbody>



        </table>
    </div>
    <br>

    <!-- table 02 -->
    <div class="table-container">
        <table class="table">
            <h4>ITA 2567</h4>
            <br>
            <tbody>
                <tr>
                    <th scope="row">28 มีนาคม 2567</th>
                    <td><a href="#">MOIT13</a></td>

                </tr>
                <tr>
                    <th scope="row">28 มีนาคม 2567</th>
                    <td><a href="#">MOIT22</a></td>

                </tr>
                <tr>
                    <th scope="row">28 มีนาคม 2567</th>
                    <td><a href="#">MOIT21</a>
                    </td>

                </tr>
                <tr>
                    <th scope="row">28 มีนาคม 2567</th>
                    <td><a href="#">MOIT19</a></td>

                </tr>
                <tr>
                    <th scope="row">28 มีนาคม 2567</th>
                    <td><a href="#">MOIT18</a></td>

                </tr>
                <tr>
                    <th scope="row">28 มีนาคม 2567</th>
                    <td><a href="#">MOIT17</a></td>

                </tr>
                <tr>
                    <th scope="row">28 มีนาคม 2567</th>
                    <td><a href="#">MOIT16</a></td>

                </tr>
                <tr>
                    <th scope="row">28 มีนาคม 2567</th>
                    <td><a href="#">MOIT15</a></td>

                </tr>
                <tr>
                    <th scope="row">27 มีนาคม 2567</th>
                    <td><a href="#">MOIT14</a></td>

                </tr>
                <tr>
                    <th scope="row">27 มีนาคม 2567</th>
                    <td><a href="#">MOIT12</a></td>

                </tr>

            </tbody>
        </table>
    </div> <br>


    <!-- container   3-->
    <div class="table-container">
        <table class="table">
            <h4>ITA 2566</h4>
            <br>
            <tbody>
                <tr>
                    <th scope="row">27 มิถุนายน 2566</th>
                    <td><a href="#">MOIT 20 หน่วยงานมีการอบรมให้ความรู้ภายในหน่วยงาน
                            เรื่องการป้องกันผลประโยชน์ทับซ้อน
                            โดยใช้หลักสูตรต้านทุจริตศึกษา</a></td>

                </tr>
                <tr>
                    <th scope="row">27 มิถุนายน 2566</th>
                    <td><a href="#">MOIT 17
                            หน่วยงานมีการวิเคราะห์ความเสี่ยงเกี่ยวกับผลประโยชน์ทับซ้อนประจำปีของหน่วยงาน</a></td>

                </tr>
                <tr>
                    <th scope="row">26 มิถุนายน 2566</th>
                    <td><a href="#">MOIT 11
                            หน่วยงานของท่านเปิดโอกาสให้ผู้มีส่วนได้ส่วนเสียมีโอกาสเข้ามามีส่วนร่วมในการดำเนินงานตามภารกิจของหน่วยงาน</a>
                    </td>

                </tr>
                <tr>
                    <th scope="row">25 มิถุนายน 2566</th>
                    <td><a href="#">MOIT 8
                            หน่วยงานมีการรายงานการประเมินและเกี่ยวกับการประเมินผลการปฏิบัติราชการของบุคลากรในหน่วยงาน
                            และเปิดเผยผลการปฏิบัติราชการ ระดับดีเด่น และระดับดีมาก ในที่เปิดเผยให้ทราบ รอบปีงบประมาณ
                            พ.ศ. 2564 และรอบปีงบประมาณ พ.ศ. 2565</a></td>

                </tr>
                <tr>
                    <th scope="row">31 มีนาคม 2566</th>
                    <td><a href="#">MOIT 16 หน่วยงานมีรายงานการกำกับติดตามการดำเนินงานตามแผนปฏิบัติการป้องกัน
                            ปราบปรามการทุจริตและประพฤติมิชอบ ประจำปีของหน่วยงาน
                            และแผนปฏิบัติการส่งเสริมคุณธรรมของชมรมจริยธรรม ประจำปีของหน่วยงาน</a></td>

                </tr>
            </tbody>
        </table>
    </div> <br>


    <!--table 4 -->
    <div class="table-container">
        <table class="table">
            <h4>ITA 2565</h4>
            <br>
            <tbody>
                <tr>
                    <th scope="row">30 มิถุนายน 2565</th>
                    <td><a href="#">MOIT21 หน่วยงานมีการอบรมให้ความรู้ภายในหน่วยงาน เรื่องการป้องกันผลประโยชน์ทับซ้อน
                            โดยใช้หลักสูตรต้านทุจริตศึกษา</a></td>

                </tr>
                <tr>
                    <th scope="row">30 มิถุนายน 2565</th>
                    <td><a href="#">MOIT19
                            หน่วยงานมีการกำหนดมาตรการเพื่อจัดการความเสี่ยงเกี่ยวกับผลประโยชน์ทับซ้อนของหน่วยงาน
                            และมีการรวมกลุ่มในนามชมรม STRONG</a></td>

                </tr>
                <tr>
                    <th scope="row">30 มิถุนายน 2565</th>
                    <td><a href="#">MOIT18
                            หน่วยงานมีการวิเคราะห์ความเสี่ยงเกี่ยวกับผลประโยชน์ทับซ้อนประจำปีของหน่วยงาน</a>
                    </td>

                </tr>
                <tr>
                    <th scope="row">30 มิถุนายน 2565</th>
                    <td><a href="#">MOIT12
                            หน่วยงานของท่านเปิดโอกาสให้ผู้มีส่วนได้ส่วนเสียมีโอกาสเข้ามามีส่วนร่วมในการดำเนินงานตามภารกิจของหน่วยงาน</a>
                    </td>

                </tr>
                <tr>
                    <th scope="row">30 มิถุนายน 2565</th>
                    <td><a href="#">MOIT9
                            หน่วยงานมีการอบรมให้ความรู้แก่เจ้าหน้าที่ภายในหน่วยงานเกี่ยวกับการเสริมสร้างและพัฒนาทางด้านจริยธรรม
                            และการรักษาวินัยรวมทั้งการป้องกันมิให้กระทำผิดวินัย</a></td>

                </tr>
            </tbody>
        </table>
    </div>
    <br>






    <?php require_once 'footer.php' ?>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





</body>

</html>