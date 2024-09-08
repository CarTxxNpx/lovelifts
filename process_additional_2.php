<?php
include('db_connect.php'); // เรียกใช้การเชื่อมต่อฐานข้อมูล

$user_id = $_POST['user_id'];
$question6 = $_POST['question6'];
$question7 = $_POST['question7'];

// คำนวณคะแนนจากแบบประเมิน 2 ข้อ
$score_additional_2 = $question6 + $question7;

// บันทึกผลการประเมิน 2 ข้อลงในตาราง assessments
$sql = "UPDATE assessments SET score_additional_2 = '$score_additional_2' WHERE user_id = '$user_id'";
$conn->query($sql);

// หากมีข้อใดตอบว่า "ใช่" ส่งผู้ใช้ไปทำแบบประเมิน 9 ข้อ
if ($score_additional_2 > 0) {
    header("Location: additional_9_questions.php?user_id=$user_id");
} else {
    header("Location: assessment_result.php?user_id=$user_id");
}

$conn->close();
?>
