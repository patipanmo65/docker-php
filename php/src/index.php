<?php
require_once('connect/connect.php');

?>


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

    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
    }

    h5 {
        text-align: center;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .row {
        margin-bottom: 30px;
    }

    ol {
        padding-left: 20px;
    }

    .postext {
        background-color: #563d7c;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-align: center;
        margin-bottom: 20px;
    }

    .card-img-top {
        width: 500px;
        height: 500px;
        object-fit: cover;
    }
    </style>

</head>

<body>

    <!-- includes navbar เรียกใช้ Navbar -->

    <?php require_once('nav.php') ?>


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
            <h3>ข่าวสารสุขภาพ</h3>

            <br>
            <!-- New Course Style -->
            <!-- TODO: Make CourseCarousel Friendly Support on Mobile -->
            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel carouselCourse slide carousel-multi-item" data-ride="carousel">

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

                        <!-- slide 1 -->

                        <div class="col-md-4" style="float:left">
                            <div class="card card-cascade wider mb-2">
                                <div class="view view-cascade">
                                    <?php

                                    // เชื่อมต่อ ฐานข้อมูล
                                    // require_once('connect.php');

                                    // ดึงข้อมูลจาก ฐานข้อมูล มาเเสดง
                                    $id = 1; // เบือก id ที่ต้องการเเสดงผล
                                    $sql = "SELECT * FROM health_news WHERE id = $id";
                                    $result = $conn->query($sql);

                                    // Check if there is data
                                    if ($result->num_rows > 0) {
                                        // Loop through the data to display images
                                        while ($row = $result->fetch_assoc()) {
                                            // เเสดงภาพ
                                            echo '<img class="card-img-top" src="./adminlte_php_2/pages/health_news/uploads/' . $row["image"] . '" alt="Card image cap"> ';
                                        }
                                    } else {
                                        // หากไม่มี ภาพ ให้เเสดง card  จาก api
                                        echo '<img class="card-img-top" src="https://placehold.co/500x500" alt="Card image cap">';
                                    }
                                    ?>
                                </div>

                                <div class="card-body card-body-cascade">
                                    <h5 class="card-title">
                                        <?php
                                        // Fetch data from the database for a specific ID
                                        $sql = "SELECT title FROM health_news WHERE id = $id";
                                        $result = $conn->query($sql);

                                        // Check if there is data
                                        if ($result->num_rows > 0) {
                                            // Loop through the data to display titles
                                            while ($row = $result->fetch_assoc()) {
                                                echo $row["title"];
                                            }
                                        } else {
                                            // If there is no data, display "Title not available"
                                            echo "Title not available";
                                        }
                                        ?>
                                    </h5>
                                    <div class="collapse-content">
                                        <p class="card-text collapse" id="pNormalCollapse">
                                            <?php
                                            // Fetch data from the database for a specific ID
                                            $sql = "SELECT content FROM health_news WHERE id = $id";
                                            $result = $conn->query($sql);

                                            // Check if there is data
                                            if ($result->num_rows > 0) {
                                                // Loop through the data to display content
                                                while ($row = $result->fetch_assoc()) {
                                                    echo substr($row["content"], 0, 100) . '...'; // Truncate content
                                                }
                                            } else {
                                                // If there is no data, display "Description not available"
                                                echo "Description not available";
                                            }
                                            ?>
                                        </p>
                                        <a class="btn btn-flat text-smd p-1 my-1 mr-0 mml-1 collapsed"
                                            data-toggle="collapse" href="#pNormalCollapse" aria-expanded="false"
                                            aria-controls="collapseContent"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- slide 2 -->

                        <div class="col-md-4" style="float:left">
                            <div class="card card-cascade wider mb-2">
                                <div class="view view-cascade">
                                    <?php

                                    // Include the database connection
                                    // require_once('connect.php');

                                    // Fetch data from the database for a specific ID
                                    $id = 6; // Change this to the desired ID
                                    $sql = "SELECT * FROM health_news WHERE id = $id";
                                    $result = $conn->query($sql);

                                    // Check if there is data
                                    if ($result->num_rows > 0) {
                                        // Loop through the data to display images
                                        while ($row = $result->fetch_assoc()) {
                                            // Display image
                                            echo '<img class="card-img-top" src="./adminlte_php_2/pages/health_news/uploads/' . $row["image"] . '" alt="Card image cap">';
                                        }
                                    } else {
                                        // If there is no data, display a placeholder image
                                        echo '<img class="card-img-top" src="https://placehold.co/500x500" alt="Card image cap">';
                                    }
                                    ?>
                                </div>

                                <div class="card-body card-body-cascade">
                                    <h5 class="card-title">
                                        <?php
                                        // Fetch data from the database for a specific ID
                                        $sql = "SELECT title FROM health_news WHERE id = $id";
                                        $result = $conn->query($sql);

                                        // Check if there is data
                                        if ($result->num_rows > 0) {
                                            // Loop through the data to display titles
                                            while ($row = $result->fetch_assoc()) {
                                                echo $row["title"];
                                            }
                                        } else {
                                            // If there is no data, display "Title not available"
                                            echo "Title not available";
                                        }
                                        ?>
                                    </h5>
                                    <div class="collapse-content">
                                        <p class="card-text collapse" id="pNormalCollapse">
                                            <?php
                                            // Fetch data from the database for a specific ID
                                            $sql = "SELECT content FROM health_news WHERE id = $id";
                                            $result = $conn->query($sql);

                                            // Check if there is data
                                            if ($result->num_rows > 0) {
                                                // Loop through the data to display content
                                                while ($row = $result->fetch_assoc()) {
                                                    echo substr($row["content"], 0, 100) . '...'; // Truncate content
                                                }
                                            } else {
                                                // If there is no data, display "Description not available"
                                                echo "Description not available";
                                            }
                                            ?>
                                        </p>
                                        <a class="btn btn-flat text-smd p-1 my-1 mr-0 mml-1 collapsed"
                                            data-toggle="collapse" href="#pNormalCollapse" aria-expanded="false"
                                            aria-controls="collapseContent"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">

                        <!-- silde 3 -->

                        <div class="col-md-4" style="float:left">
                            <div class="card card-cascade wider mb-2">
                                <div class="view view-cascade">
                                    <?php

                                    // Include the database connection
                                    // require_once('connect.php');

                                    // Fetch data from the database for a specific ID
                                    $id = 3; // Change this to the desired ID
                                    $sql = "SELECT * FROM health_news WHERE id = $id";
                                    $result = $conn->query($sql);

                                    // Check if there is data
                                    if ($result->num_rows > 0) {
                                        // Loop through the data to display images
                                        while ($row = $result->fetch_assoc()) {
                                            // Display image
                                            echo '<img class="card-img-top" src="./adminlte_php_2/pages/health_news/uploads/' . $row["image"] . '" alt="Card image cap">';
                                        }
                                    } else {
                                        // If there is no data, display a placeholder image
                                        echo '<img class="card-img-top" src="https://placehold.co/500x500" alt="Card image cap">';
                                    }
                                    ?>
                                </div>

                                <div class="card-body card-body-cascade">
                                    <h5 class="card-title">
                                        <?php
                                        // Fetch data from the database for a specific ID
                                        $sql = "SELECT title FROM health_news WHERE id = $id";
                                        $result = $conn->query($sql);

                                        // Check if there is data
                                        if ($result->num_rows > 0) {
                                            // Loop through the data to display titles
                                            while ($row = $result->fetch_assoc()) {
                                                echo $row["title"];
                                            }
                                        } else {
                                            // If there is no data, display "Title not available"
                                            echo "Title not available";
                                        }
                                        ?>
                                    </h5>
                                    <div class="collapse-content">
                                        <p class="card-text collapse" id="pNormalCollapse">
                                            <?php
                                            // Fetch data from the database for a specific ID
                                            $sql = "SELECT content FROM health_news WHERE id = $id";
                                            $result = $conn->query($sql);

                                            // Check if there is data
                                            if ($result->num_rows > 0) {
                                                // Loop through the data to display content
                                                while ($row = $result->fetch_assoc()) {
                                                    echo substr($row["content"], 0, 100) . '...'; // Truncate content
                                                }
                                            } else {
                                                // If there is no data, display "Description not available"
                                                echo "Description not available";
                                            }
                                            ?>
                                        </p>
                                        <a class="btn btn-flat text-smd p-1 my-1 mr-0 mml-1 collapsed"
                                            data-toggle="collapse" href="#pNormalCollapse" aria-expanded="false"
                                            aria-controls="collapseContent"></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- slide 4 -->

                        <div class="col-md-4" style="float:left">
                            <div class="card card-cascade wider mb-2">
                                <div class="view view-cascade">
                                    <?php

                                    // Include the database connection
                                    // require_once('connect.php');

                                    // Fetch data from the database for a specific ID
                                    $id = 4; // Change this to the desired ID
                                    $sql = "SELECT * FROM health_news WHERE id = $id";
                                    $result = $conn->query($sql);

                                    // Check if there is data
                                    if ($result->num_rows > 0) {
                                        // Loop through the data to display images
                                        while ($row = $result->fetch_assoc()) {
                                            // Display image
                                            echo '<img class="card-img-top" src="./adminlte_php_2/pages/health_news/uploads/' . $row["image"] . '" alt="Card image cap">';
                                        }
                                    } else {
                                        // If there is no data, display a placeholder image
                                        echo '<img class="card-img-top" src="https://placehold.co/500x500" alt="Card image cap">';
                                    }
                                    ?>
                                </div>

                                <div class="card-body card-body-cascade">
                                    <h5 class="card-title">
                                        <?php
                                        // Fetch data from the database for a specific ID
                                        $sql = "SELECT title FROM health_news WHERE id = $id";
                                        $result = $conn->query($sql);

                                        // Check if there is data
                                        if ($result->num_rows > 0) {
                                            // Loop through the data to display titles
                                            while ($row = $result->fetch_assoc()) {
                                                echo $row["title"];
                                            }
                                        } else {
                                            // If there is no data, display "Title not available"
                                            echo "Title not available";
                                        }
                                        ?>
                                    </h5>
                                    <div class="collapse-content">
                                        <p class="card-text collapse" id="pNormalCollapse">
                                            <?php
                                            // Fetch data from the database for a specific ID
                                            $sql = "SELECT content FROM health_news WHERE id = $id";
                                            $result = $conn->query($sql);

                                            // Check if there is data
                                            if ($result->num_rows > 0) {
                                                // Loop through the data to display content
                                                while ($row = $result->fetch_assoc()) {
                                                    echo substr($row["content"], 0, 100) . '...'; // Truncate content
                                                }
                                            } else {
                                                // If there is no data, display "Description not available"
                                                echo "Description not available";
                                            }
                                            ?>
                                        </p>
                                        <a class="btn btn-flat text-smd p-1 my-1 mr-0 mml-1 collapsed"
                                            data-toggle="collapse" href="#pNormalCollapse" aria-expanded="false"
                                            aria-controls="collapseContent"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- slide 5 -->

                        <div class="col-md-4" style="float:left">
                            <div class="card card-cascade wider mb-2">
                                <div class="view view-cascade">
                                    <?php

                                    // Include the database connection
                                    // require_once('connect.php');

                                    // Fetch data from the database for a specific ID
                                    $id = 5; // Change this to the desired ID
                                    $sql = "SELECT * FROM health_news WHERE id = $id";
                                    $result = $conn->query($sql);

                                    // Check if there is data
                                    if ($result->num_rows > 0) {
                                        // Loop through the data to display images
                                        while ($row = $result->fetch_assoc()) {
                                            // Display image
                                            echo '<img class="card-img-top" src="./adminlte_php_2/pages/health_news/uploads/' . $row["image"] . '" alt="Card image cap">';
                                        }
                                    } else {
                                        // If there is no data, display a placeholder image
                                        echo '<img class="card-img-top" src="https://placehold.co/500x500" alt="Card image cap">';
                                    }
                                    ?>
                                </div>

                                <div class="card-body card-body-cascade">
                                    <h5 class="card-title">
                                        <?php
                                        // Fetch data from the database for a specific ID
                                        $sql = "SELECT title FROM health_news WHERE id = $id";
                                        $result = $conn->query($sql);

                                        // Check if there is data
                                        if ($result->num_rows > 0) {
                                            // Loop through the data to display titles
                                            while ($row = $result->fetch_assoc()) {
                                                echo $row["title"];
                                            }
                                        } else {
                                            // If there is no data, display "Title not available"
                                            echo "Title not available";
                                        }
                                        ?>
                                    </h5>
                                    <div class="collapse-content">
                                        <p class="card-text collapse" id="pNormalCollapse">
                                            <?php
                                            // Fetch data from the database for a specific ID
                                            $sql = "SELECT content FROM health_news WHERE id = $id";
                                            $result = $conn->query($sql);

                                            // Check if there is data
                                            if ($result->num_rows > 0) {
                                                // Loop through the data to display content
                                                while ($row = $result->fetch_assoc()) {
                                                    echo substr($row["content"], 0, 100) . '...'; // Truncate content
                                                }
                                            } else {
                                                // If there is no data, display "Description not available"
                                                echo "Description not available";
                                            }
                                            ?>
                                        </p>
                                        <a class="btn btn-flat text-smd p-1 my-1 mr-0 mml-1 collapsed"
                                            data-toggle="collapse" href="#pNormalCollapse" aria-expanded="false"
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

        </div>

    </div>



    <!-- Block contents -->

    <div class="container">
        <h3>ข่าวสารประชาสัมพันธ์</h3>
        <br>
        <div class="row justify-content-between">



            <div class="col-md-12 col-xl-3">
                <div class="center-content">
                    <!-- Start Block Content Center -->
                    <div class="block-content text-left">
                        <?php
                        // Include the database connection
                        // require_once('connect.php');

                        // Fetch data for center content
                        $center_sql = "SELECT title, content FROM news LIMIT 7"; // Adjust your SQL query to fetch 5 records
                        $center_result = $conn->query($center_sql);

                        // Check if there is data for center content
                        if ($center_result->num_rows > 0) {
                            // Loop through the data to display center content
                            while ($center_row = $center_result->fetch_assoc()) {
                                // Display title
                                echo "<h4>" . $center_row['title'] . "</h4>";
                                echo "<p>" . $center_row['content'] . "</p>";
                                // Display PDF link
                                // echo "<p><a href='./adminlte_php_2/pages/news/uploads/pdf/" . $center_row['pdf_file'] . "' target='_blank'>View PDF</a></p>";
                            }
                        } else {

                            // If there is no data for center content, display a default message
                            echo "<p>No content available</p>";
                        }
                        ?>
                    </div>
                    <!-- End Block Content Center -->
                </div>
            </div>

            <!-- center -contents -->


            <div class="col-md-12 col-xl-3">
                <div class="center-content">
                    <!-- Start Block Content Center -->
                    <div class="block-content text-left">
                        <?php
                        // Include the database connection
                        // require_once('connect.php');

                        // Define which columns you want to select
                        $selected_columns = "title, content"; // Adjust based on your requirements

                        // Calculate the offset for the LIMIT clause
                        $offset = 7; // เริ่มข้ิมูลที่ 6
                        $limit = 7; // เเสดงเลข

                        // Fetch data for the third block of content (rows 6 to 10)
                        $third_sql = "SELECT $selected_columns FROM news LIMIT $offset, $limit";

                        // Execute the SQL query
                        $third_result = $conn->query($third_sql);

                        // Check if the query executed successfully
                        if ($third_result) {
                            // Check if there is data for the third block
                            if ($third_result->num_rows > 0) {
                                // Loop through the data to display the third block content
                                while ($third_row = $third_result->fetch_assoc()) {
                                    // Display title
                                    echo "<h4>" . $third_row['title'] . "</h4>";
                                    // Display
                                    echo "<p>" . $third_row['content'] . "</p>";
                                }
                            } else {
                                // If there is no data for the third block, display a default message
                                echo "<p>No content available</p>";
                            }
                        } else {
                            // If there was an error in the query execution, display the error
                            echo "Error: " . $conn->error;
                        }
                        ?>
                    </div>
                    <!-- End กล่อง ข้อความ ตรงกลาง -->
                </div>
            </div>


            <!-- social media -->

            <div class="col-md-4 col-xl-3">
                <div class="d-none d-md-block card mt-3 mb-3 float-center">
                    <img class="card-img-top"
                        src="https://image.bangkokbiznews.com/image/kt/media/image/fileupload/source/chulalak/9467334575484.jpg?1551879241889?x-image-process=style/lg-webp" />
                    <p class="container">ผู้อำนวยการ</p>
                    <p class="container">โรงพยาบาลสมเด็จพระยุพราชปัว</p>
                </div>
                <div class="d-none d-xl-block fb-page mb-3" data-href="https://www.facebook.com/PCPHNAN/?locale=th_TH"
                    data-tabs="timeline" data-width="300" data-height="550" data-small-header="false"
                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/PCPHNAN/?locale=th_TH" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/PCPHNAN/?locale=th_TH">โรงพยาบาลสมเด็จพระยุพราชปัว
                            จ.น่าน
                        </a>
                    </blockquote>
                </div>
                <div class="card mb-3">
                    <div class="hoverable view">
                        <div class="card-body">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235.54260580612856!2d100.92489624573506!3d19.16540570245212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3127e12347b829eb%3A0x1922d96804ce2ae7!2z4LmC4Lij4LiH4Lie4Lii4Liy4Lia4Liy4Lil4Liq4Lih4LmA4LiU4LmH4LiI4Lie4Lij4Liw4Lii4Li44Lie4Lij4Liy4LiK4Lib4Lix4Lin!5e0!3m2!1sth!2sth!4v1714546802029!5m2!1sth!2sth"
                                width="98%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            <p class="card-text"><u>ที่อยู่</u> โรงพยาบาลสมเด็จพระยุพราชปัว 70 ม.6
                                ต.วรนคร, Pua,
                                Thailand, Nan</p>
                            <p class="card-text"><u>โทรศัพท์</u> <a href="tel:054 719 614">054 719
                                    614</a>
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


    <!-- connection -->


    </div>
    <br>
    <br>
    <br>
    <br>



    <!-- table -->
    <div class="table-container">
        <table class="table">
            <h4>ประกาศประกวดราคา สอบราคา</h4>
            <br>

            <tbody>
                <tr>
                    <th scope="row">17 มกราคม 2567</th>
                    <td><a href="#">ประกาศผลผู้ชนะการจัดซื้อจัดจ้างหรือผู้ได้รับการคัดเลือก
                            และสาระสำคัญของสัญญาหรือข้อตกลงเป็นหนังสือ ประจำไตรมาสที่ 1 ปีงบประมาณ 2567</a>
                    </td>
                    <!-- <td><a href="#">Otto</a></td>
                    <td><a href="#">@mdo</a></td> -->
                </tr>
                <tr>
                    <th scope="row">24 พฤศจิกายน 2566</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาจ้างก่อสร้างปรับปรุงห้องผ่าตัด OR4
                            และห้องพักฟื้นพร้อมระบบปรับอากาศและระบายอากาศ โรงพยาบาลสมเด็จพระยุพราชปัว จำนวน
                            1 รายการ
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (ebidding)</a></td>
                    <!-- <td><a href="#">Thornton</a></td>
                    <td><a href="#">@fat</a></td> -->
                </tr>
                <tr>
                    <th scope="row">12 ตุลาคม 2566</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาจ้างก่อสร้างปรับปรุงและต่อเติมอาคารและโครงสร้างคสล.
                            1 ชั้น
                            สำหรับอาคารผู้ป่วยนอก โรงพยาบาลสมเด็จพระยุพราชปัว จำนวน 1 รายการ
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (ebidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">22 กันยายน 2566</th>
                    <td><a href="#">ร่างประกาศจังหวัดน่าน เรื่อง ประกวดราคาก่อสร้างปรับปรุงห้องผ่าตัด OR4
                            และห้องพักฟื้นพร้อมระบบปรับอากาศและระบายอากาศ โรงพยาบาลสมเด็จพระยุพราชปัว จำนวน
                            1 รายการ</a>
                    </td>

                </tr>
                <tr>
                    <th scope="row">20 กันยายน 2566</th>
                    <td><a href="#"> ประกาศผู้ชนะการเสนอราคาซื้อ ครุภัณฑ์วิทยาศาสตร์และการแพทย์ จำนวน 1
                            รายการ
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (ebidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">22 สิงหาคม 2566</th>
                    <td><a href="#">ร่างประกาศจังหวัดน่าน เรื่อง
                            ประกวดราคาจ้างเหมาบริการฟอกเลือดผู้ป่วยโรคไต
                            ด้วยเครื่องไตเทียม โรงพยาบาลสมเด็จพระยุพราชปัว อำเภอปัว จังหวัดน่าน จำนวน 1
                            รายการ</a></td>

                </tr>
                <tr>
                    <th scope="row">11 กรกฎาคม 2566</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาซื้อ ครุภัณฑ์คอมพิวเตอร์ จำนวน 4 รายการ
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (ebidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">27 มิถุนายน 2566</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาซื้อ ครุภัณฑ์วิทยาศาสตร์และการแพทย์ จำนวน 1
                            รายการ
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">26 มิถุนายน 2566</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาซื้อ ครุภัณฑ์วิทยาศาสตร์และการแพทย์ จำนวน 1
                            รายการ
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
                            ประกาศผู้ชนะการเสนอราคาเครื่องตรวจหาสารชีวเคมีในเลือดและสารคัดหลั่งอัตโนมัติพร้อมน้ำยา
                            จำนวน
                            23 รายการ ประจำปีงบประมาณ 2566 โดยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)</a>
                    </td>

                </tr>
                <tr>
                    <th scope="row">2 มีนาคม 2566</th>
                    <td><a href="#">ยกเลิกประกาศ
                            ประกวดราคาจ้างเหมาทำความสะอาดอาคารภายในโรงพยาบาลสมเด็จพระยุพราชปัว
                            ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)</a></td>

                </tr>
                <tr>
                    <th scope="row">15 ธันวาคม 2565</th>
                    <td><a href="#">ประกาศผู้ชนะการเสนอราคาเช่าเครื่องตรวจทางภูมิคุ้มกันวิทยาอัตโนมัติ
                            พร้อมน้ำยา จำนวน
                            9 รายการ ประจำปีงบประมาณ 2566 โดยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)</a>
                    </td>

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
                            หน่วยงานมีการวิเคราะห์ความเสี่ยงเกี่ยวกับผลประโยชน์ทับซ้อนประจำปีของหน่วยงาน</a>
                    </td>

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
                            และเปิดเผยผลการปฏิบัติราชการ ระดับดีเด่น และระดับดีมาก ในที่เปิดเผยให้ทราบ
                            รอบปีงบประมาณ
                            พ.ศ. 2564 และรอบปีงบประมาณ พ.ศ. 2565</a></td>

                </tr>
                <tr>
                    <th scope="row">31 มีนาคม 2566</th>
                    <td><a href="#">MOIT 16
                            หน่วยงานมีรายงานการกำกับติดตามการดำเนินงานตามแผนปฏิบัติการป้องกัน
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
                    <td><a href="#">MOIT21 หน่วยงานมีการอบรมให้ความรู้ภายในหน่วยงาน
                            เรื่องการป้องกันผลประโยชน์ทับซ้อน
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