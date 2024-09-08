<?php
include('db_connect.php'); // เชื่อมต่อฐานข้อมูล

// ดึงข้อมูลผู้ใช้และผลการประเมินทั้งหมด
$sql = "
    SELECT users.id, users.name, users.age, users.gender, 
           assessments.score_first_assessment, 
           assessments.score_additional_2, 
           assessments.score_additional_9, 
           assessments.score_additional_8, 
           assessments.special_question
    FROM users 
    JOIN assessments 
    ON users.id = assessments.user_id
    ORDER BY users.id ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแอดมิน - ข้อมูลผู้ใช้และผลการประเมิน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">หน้าแอดมิน - ข้อมูลผู้ใช้และผลการประเมิน</h1>

        <!-- ตารางแสดงข้อมูลผู้ใช้ -->
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อ</th>
                    <th>อายุ</th>
                    <th>เพศ</th>
                    <th>คะแนน 5 ข้อแรก</th>
                    <th>คะแนน 2 ข้อ</th>
                    <th>คะแนน 9 ข้อ</th>
                    <th>คะแนน 8 ข้อ</th>
                    <th>คำถามพิเศษ</th>
                    <th>ดูรายละเอียด</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['age'] . "</td>";
                        echo "<td>" . ($row['gender'] == 'male' ? 'ชาย' : 'หญิง') . "</td>";
                        echo "<td>" . $row['score_first_assessment'] . "</td>";
                        echo "<td>" . ($row['score_additional_2'] !== null ? $row['score_additional_2'] : 'ไม่ได้ทำ') . "</td>";
                        echo "<td>" . ($row['score_additional_9'] !== null ? $row['score_additional_9'] : 'ไม่ได้ทำ') . "</td>";
                        echo "<td>" . ($row['score_additional_8'] !== null ? $row['score_additional_8'] : 'ไม่ได้ทำ') . "</td>";
                        echo "<td>" . ($row['special_question'] !== null ? ($row['special_question'] == 1 ? 'ตอบว่าใช่' : 'ตอบว่าไม่ใช่') : 'ไม่มี') . "</td>";
                        echo "<td><a href='assessment_result.php?user_id=" . $row['id'] . "' class='btn btn-info'>ดูรายละเอียด</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='10' class='text-center'>ไม่มีข้อมูลผู้ใช้</td></tr>";
                }
                ?>
            </tbody>
        </table>

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
