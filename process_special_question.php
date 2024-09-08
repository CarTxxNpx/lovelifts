<?php
include('db_connect.php'); // เรียกใช้การเชื่อมต่อฐานข้อมูล

$user_id = $_POST['user_id'];
$special_question = $_POST['special_question'];

// บันทึกคำตอบของคำถามพิเศษในฐานข้อมูล
$sql = "UPDATE assessments SET special_question = '$special_question' WHERE user_id = '$user_id'";
$conn->query($sql);

// หลังจากบันทึกคำตอบแล้ว ส่งผู้ใช้ไปยังหน้าแสดงผลการประเมิน
header("Location: assessment_result.php?user_id=$user_id");
$conn->close();
?>
