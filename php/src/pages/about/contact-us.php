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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <meta name="theme-color" content="#563d7c" />





</head>

<body>


    <?php require_once '../../nav.php' ?>


    <main>

        <div class="container">
            <h2>ติดต่อ-สอบถาม</h2>
            <form>
                <div class="form-group">
                    <label for="name">ชื่อ:</label>
                    <input type="text" class="form-control" id="name" placeholder="กรอกชื่อ">
                </div>
                <div class="form-group">
                    <label for="email">อีเมล:</label>
                    <input type="email" class="form-control" id="email" placeholder="กรอกอีเมล">
                </div>
                <div class="form-group">
                    <label for="phone">เบอร์โทร:</label>
                    <input type="tel" class="form-control" id="phone" placeholder="กรอกเบอร์โทร">
                </div>
                <div class="form-group">
                    <label for="details">รายละเอียด:</label>
                    <textarea class="form-control" id="details" rows="3" placeholder="กรอกรายละเอียด"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">ส่งข้อมูล</button>
            </form>
        </div>


        <br>


        <div class="container text-center">
            <h5>ที่ตั้งสำนักงานมูลนิธิโรงพยาบาลสมเด็จพระยุพราช สาขาปัว<br>
                โรงพยาบาลสมเด็จพระยุพราชปัว<br>
                ที่อยู่: เลขที่ 70 หมู่ 6 ถนนปัว – น้ำยาว ตำบลปัว อำเภอปัว จังหวัดน่าน<br>
                เบอร์โทร: 0-5479-1104 , 05475-6366<br>
                โทรสาร: 0-5479-1225<br>
                อีเมลล์: puabranch@gmail.com
                <br>
            </h5>
        </div>


    </main>

    <br>





























    <?php require_once '../../footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>







</body>


</html>