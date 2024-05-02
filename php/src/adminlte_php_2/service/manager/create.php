<?php


require_once '../connect.php';

echo "<pre>";
echo "ข้อมูลจากที่ได้จาก form \n";
print_r($_POST);
echo "ข้อมูลจากที่ได้จาก การอัพโหลดรูปภาพ \n";
print_r($_FILES);
echo "</pre>";

echo "<a href='../../pages/manager/'> กลับหน้าเดิม </a>"

?>