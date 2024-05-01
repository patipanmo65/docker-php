<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title> ลงทะเบียนผู้ป่วยใหม่</title>
</head>
<!--  #f8fac5-->

<body style="background-color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col col-sm-12">
                <h1 class="text-center" style="margin-top: 50px;"> แบบฟอร์มลงทะเบียนผู้ป่วยใหม่</h1>
                <center>*โปรดกรอกข้อความให้ครบถ้วนชัดเจน</center>

            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col col-sm-12">
                <form action="https://devbanban.com/?p=2867" method="post">
                    <div class="row mb-3">
                        <div class="col-sm-5">
                            เลขประจำตัวบัตรประชาชน
                            <input type="text" class="form-control" name="peopleID"
                                placeholder="เลขประจำตัวบัตรประชาชน 13 หลัก" required minlength="13" maxlength="13">
                        </div>
                        <div class="col-sm-7">
                            สิทธิการรักษาพยาบาล <br>
                            <input class="form-check-input" type="radio" name="paytype" value="1"> ชำระเงินเอง
                            <input class="form-check-input" type="radio" name="paytype" value="2"> ประกันสุขภาพถ้วนหน้า
                            <br>
                            <input class="form-check-input" type="radio" name="paytype" value="3"> ข้าราชการ
                            <input class="form-check-input" type="radio" name="paytype" value="4"> ประกันสังคม
                            <input class="form-check-input" type="radio" name="paytype" value="อื่นๆ"> อื่นๆ <input
                                type="text" name="paytypeOther">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            คำนำหน้าชื่อ &nbsp;
                            <input class="form-check-input" type="radio" name="titlename" value="นาย"> นาย &nbsp;
                            <input class="form-check-input" type="radio" name="titlename" value="นาง"> นาง &nbsp;
                            <input class="form-check-input" type="radio" name="titlename" value="นางสาว"> นางสาว &nbsp;
                            <input class="form-check-input" type="radio" name="titlename" value="ด.ช."> ด.ช. &nbsp;
                            <input class="form-check-input" type="radio" name="titlename" value="ด.ญ."> ด.ญ. &nbsp;
                            <input class="form-check-input" type="radio" name="titlename" value="อื่นๆ"> อื่นๆ <input
                                type="text" name="titlenameOther">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            เพศ &nbsp;
                            <input class="form-check-input" type="radio" name="sex" value="ชาย"> ชาย &nbsp;
                            <input class="form-check-input" type="radio" name="sex" value="หญิง"> หญิง &nbsp;
                            <input class="form-check-input" type="radio" name="sex" value="อื่นๆ"> อื่นๆ <input
                                type="text" name="sexOther">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-1 col-form-label">ชื่อ</label>
                        <div class="col-sm-3">
                            <input type="text" name="firstnameTH" class="form-control" required
                                placeholder="ชื่อ(ภาษาไทย)">
                        </div>
                        <label class="col-sm-1 col-form-label">สกุล</label>
                        <div class="col-sm-4">
                            <input type="text" name="lastnameTH" class="form-control" required
                                placeholder="สกุล(ภาษาไทย)">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-1 col-form-label">Name</label>
                        <div class="col-sm-3">
                            <input type="text" name="firstnameEN" class="form-control" required
                                placeholder="ชื่อ(ภาษาอังกฤษ)">
                        </div>
                        <label class="col-sm-1 col-form-label">Surname</label>
                        <div class="col-sm-4">
                            <input type="text" name="lastnameEN" class="form-control" required
                                placeholder="สกุล(ภาษาอังกฤษ)">
                        </div>
                    </div>

                    <div class="row mb-3">
                        ว/ด/ป เกิด
                        <div class="col-sm-1">
                            <select name="dateBirth" class="form-control" required>
                                <option value="">วัน</option>
                                <option value="1">1</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <select name="monthBirth" class="form-control" required>
                                <option value="">เดือน</option>
                                <option value="01">มกราคม</option>
                                <option value="12">ธันวาคม</option>
                            </select>
                        </div>
                        <div class="col-sm-1">
                            <select name="yearBirth" class="form-control" required>
                                <option value="">ปี</option>
                                <option value="2500">2500</option>
                                <option value="2564">2564</option>
                            </select>
                        </div>
                        <label class="col-sm-1 col-form-label"> จ. ที่เกิด</label>
                        <div class="col-sm-2">
                            <input type="text" required name="provinceBirth" class="form-control"
                                placeholder="จังหวัดที่เกิด">
                        </div>

                        <label class="col-sm-1 col-form-label">ประเทศ</label>
                        <div class="col-sm-2">
                            <input type="text" required name="contryBirth" class="form-control"
                                placeholder="ประเทศที่เกิด">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-7">
                            ประวัติการแพ้ยา <br>
                            <input class="form-check-input" type="radio" name="allergicType" value="1"> ไม่เคยแพ้ &nbsp;
                            <input class="form-check-input" type="radio" name="allergicType" value="2"> ไม่ทราบ &nbsp;
                            <input class="form-check-input" type="radio" name="allergicType" value="3"> เคยแพ้ยา
                            โปรดระบุ <input type="text" name="allergicTypeOther">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            หมู่เลือด <br>
                            <input class="form-check-input" type="radio" name="blood" value="A"> เอ <br>
                            <input class="form-check-input" type="radio" name="blood" value="B"> บี <br>
                            <input class="form-check-input" type="radio" name="blood" value="AB"> เอบี <br>
                            <input class="form-check-input" type="radio" name="blood" value="O"> โอ <br>
                        </div>

                        <div class="col-sm-3">
                            เชื้อชาติ <br>
                            <input class="form-check-input" type="radio" name="race" value="ไทย"> ไทย <br>
                            <input class="form-check-input" type="radio" name="race" value="จีน"> จีน <br>
                            <input class="form-check-input" type="radio" name="race" value="อินเดีย"> อินเดีย <br>
                            <input class="form-check-input" type="radio" name="race" value="อื่นๆ"> อื่นๆ โปรดระบุ
                            <input type="text" name="raceTypeOther">
                        </div>

                        <div class="col-sm-3">
                            สัญชาติ <br>
                            <input class="form-check-input" type="radio" name="nationality" value="ไทย"> ไทย <br>
                            <input class="form-check-input" type="radio" name="nationality" value="จีน"> จีน <br>
                            <input class="form-check-input" type="radio" name="nationality" value="อินเดีย"> อินเดีย
                            <br>
                            <input class="form-check-input" type="radio" name="nationality" value="อื่นๆ"> อื่นๆ
                            โปรดระบุ <input type="text" name="nationalityOther">
                        </div>

                        <div class="col-sm-3">
                            ศาสนา <br>
                            <input class="form-check-input" type="radio" name="religion" value="พุทธ"> พุทธ <br>
                            <input class="form-check-input" type="radio" name="religion" value="คริสต์"> คริสต์ <br>
                            <input class="form-check-input" type="radio" name="religion" value="อิสลาม"> อิสลาม <br>
                            <input class="form-check-input" type="radio" name="religion" value="อื่นๆ"> อื่นๆ โปรดระบุ
                            <input type="text" name="religionOther">
                        </div>

                    </div>

                    <hr>
                    <pre>
              *ขาด
              -สถานภาพ
              -อาชีพ
              -ชื่อพ่อ/แม่
              -ที่อยู่
              -ข้อมูลการติดต่อ
              -อีเมล รหัสผ่าน
            </pre>
                    <center><button type="submit" class="btn btn-primary">ลงทะเบียน</button></center>
                </form>
                <br><br><br>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>