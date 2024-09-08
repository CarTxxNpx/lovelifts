<?php
include('db_connect.php'); // เรียกใช้การเชื่อมต่อฐานข้อมูล

$user_id = $_POST['user_id'];
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$question4 = $_POST['question4'];
$question5 = $_POST['question5'];
$question6 = $_POST['question6'];
$question7 = $_POST['question7'];
$question8 = $_POST['question8'];
$question9 = $_POST['question9'];

// คำนวณคะแนนจากแบบประเมิน 9 ข้อ
$score_additional_9 = $question1 + $question2 + $question3 + $question4 + $question5 + $question6 + $question7 + $question8 + $question9;

// บันทึกผลการประเมิน 9 ข้อลงในตาราง assessments
$sql = "UPDATE assessments SET score_additional_9 = '$score_additional_9' WHERE user_id = '$user_id'";
$conn->query($sql);

// หากคะแนนรวมเกิน 7 ให้ทำแบบประเมิน 8 ข้อ
if ($score_additional_9 > 7) {
    header("Location: additional_8_questions.php?user_id=$user_id");
} else {
    header("Location: assessment_result.php?user_id=$user_id");
}

$conn->close();
?>
