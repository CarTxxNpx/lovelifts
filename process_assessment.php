<?php
include('db_connect.php'); // เรียกใช้การเชื่อมต่อฐานข้อมูล

// ดึงข้อมูลจากฟอร์ม
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$question4 = $_POST['question4'];
$question5 = $_POST['question5'];

// คำนวณคะแนนรวมจากแบบประเมิน 5 ข้อ
$score_first_assessment = $question1 + $question2 + $question3 + $question4 + $question5;

// บันทึกข้อมูลผู้ใช้ลงในฐานข้อมูล
$sql_user = "INSERT INTO users (name, age, gender) VALUES ('$name', '$age', '$gender')";
$conn->query($sql_user);

// ดึง user_id ที่เพิ่งบันทึก
$user_id = $conn->insert_id;

// บันทึกผลการประเมิน 5 ข้อแรกลงในตาราง assessments
$sql_assessment = "INSERT INTO assessments (user_id, score_first_assessment) VALUES ('$user_id', '$score_first_assessment')";
$conn->query($sql_assessment);

// ตรวจสอบเงื่อนไขหากคะแนนมากกว่า 8
if ($score_first_assessment > 8) {
    // ส่งผู้ใช้ไปยังหน้าแบบประเมิน 2 ข้อ (ใช่/ไม่ใช่)
    header("Location: additional_2_questions.php?user_id=$user_id");
} else {
    // แสดงผลลัพธ์ทันที
    header("Location: assessment_result.php?user_id=$user_id");
}

$conn->close();
?>
