<?php
include('db_connect.php'); // เชื่อมต่อฐานข้อมูล

// รับ user_id เพื่อแสดงผลการประเมินของผู้ใช้คนนั้น
$user_id = $_GET['user_id'];

// ดึงข้อมูลจากตาราง users และ assessments
$sql_user = "SELECT * FROM users WHERE id = '$user_id'";
$result_user = $conn->query($sql_user);
$user = $result_user->fetch_assoc();

$sql_assessment = "SELECT * FROM assessments WHERE user_id = '$user_id'";
$result_assessment = $conn->query($sql_assessment);
$assessment = $result_assessment->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการประเมินตนเอง</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">ผลการประเมินตนเอง</h1>

        <!-- ข้อมูลส่วนตัวของผู้ใช้ -->
        <div class="card mb-3">
            <div class="card-header">
                <h2>ข้อมูลส่วนตัว</h2>
            </div>
            <div class="card-body">
                <p><strong>ชื่อ:</strong> <?php echo $user['name']; ?></p>
                <p><strong>อายุ:</strong> <?php echo $user['age']; ?></p>
                <p><strong>เพศ:</strong> <?php echo $user['gender'] === 'male' ? 'ชาย' : 'หญิง'; ?></p>
            </div>
        </div>

        <!-- ผลการประเมิน -->
        <div class="card mb-3">
            <div class="card-header">
                <h2>ผลการประเมิน</h2>
            </div>
            <div class="card-body">
                <p><strong>คะแนนจากแบบประเมิน 5 ข้อแรก:</strong> <?php echo $assessment['score_first_assessment']; ?>
                </p>
                <p><strong>คะแนนจากแบบประเมิน 2 ข้อ:</strong>
                    <?php echo $assessment['score_additional_2'] !== null ? $assessment['score_additional_2'] : 'ไม่ได้ทำ'; ?>
                </p>
                <p><strong>คะแนนจากแบบประเมิน 9 ข้อ:</strong>
                    <?php echo $assessment['score_additional_9'] !== null ? $assessment['score_additional_9'] : 'ไม่ได้ทำ'; ?>
                </p>
                <p><strong>คะแนนจากแบบประเมิน 8 ข้อ:</strong>
                    <?php echo $assessment['score_additional_8'] !== null ? $assessment['score_additional_8'] : 'ไม่ได้ทำ'; ?>
                </p>
                <!-- <p><strong>คำถามพิเศษ:</strong>
                    <?php
                    echo $assessment['special_question'] !== null
                        ? ($assessment['special_question'] == 1 ? 'ตอบว่าใช่' : 'ตอบว่าไม่ใช่')
                        : 'ไม่มี';
                    ?>
                </p> -->

                <h3 class="mt-4">ผลการประเมินขั้นสุดท้าย:</h3>
                <?php
                // ตัดสินผลการประเมินตามคะแนนที่มี
                if ($assessment['score_first_assessment'] <= 5) {
                    echo "<p class='text-success'>สุขภาพจิตของคุณอยู่ในระดับดี</p>";
                } else if ($assessment['score_first_assessment'] > 5 && $assessment['score_first_assessment'] <= 8) {
                    echo "<p class='text-warning'>สุขภาพจิตของคุณอยู่ในระดับปานกลาง</p>";
                } else {
                    echo "<p class='text-danger'>สุขภาพจิตของคุณอาจมีปัญหา โปรดปรึกษาผู้เชี่ยวชาญ</p>";
                }
                ?>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="index.html" class="btn btn-primary">กลับไปหน้าแรก</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
$conn->close();
?>