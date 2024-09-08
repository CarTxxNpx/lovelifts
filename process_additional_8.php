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

// คำนวณคะแนนจากแบบประเมิน 8 ข้อ
$score_additional_8 = $question1 + $question2 + $question3 + $question4 + $question5 + $question6 + $question7 + $question8;

// บันทึกผลการประเมิน 8 ข้อลงในตาราง assessments
$sql = "UPDATE assessments SET score_additional_8 = '$score_additional_8' WHERE user_id = '$user_id'";
$conn->query($sql);

// ตรวจสอบคำถามที่ 3
if ($question3 == 1) {
    // หากคำถามที่ 3 ตอบ "ใช่" ให้แสดงคำถามพิเศษ
    echo '
    <form action="process_special_question.php" method="post">
        <input type="hidden" name="user_id" value="' . $user_id . '">
        <label>คำถามพิเศษ: คุณรู้สึกว่าต้องการคำแนะนำเพิ่มเติมหรือไม่?</label><br>
        <input type="radio" name="special_question" value="1" required> ใช่
        <input type="radio" name="special_question" value="0"> ไม่ใช่<br>
        <input type="submit" value="ส่งคำตอบ" class="btn btn-primary">
    </form>';
} else {
    // หากคำถามที่ 3 ตอบ "ไม่ใช่" ให้ส่งไปยังหน้าแสดงผล
    header("Location: assessment_result.php?user_id=$user_id");
}

$conn->close();
?>
