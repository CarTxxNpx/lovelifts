<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>การประเมินเพิ่มเติม (9 ข้อ)</title>
</head>

<body>
    <div class="container mt-5">
        <h1>การประเมินเพิ่มเติม (9 ข้อ)</h1>

        <!-- ฟอร์มการประเมิน -->
        <form action="process_additional_9.php" method="post">
            <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>">

            <!-- ตัวอย่างคำถามที่ 1 ใน 9 ข้อ -->
            <div class="mb-3">
                <label>1. เบื่อ ไม่สนใจทำอะไร?</label><br>
                <input type="radio" name="question1" value="0" required> ไม่เคย
                <input type="radio" name="question1" value="1"> น้อยมาก
                <input type="radio" name="question1" value="2"> บางครั้ง
                <input type="radio" name="question1" value="3"> บ่อย<br>
            </div>
            <div class="mb-3">
                <label>2. ไม่สบายใจ ซึมเศร้า ท้อแท้?</label><br>
                <input type="radio" name="question2" value="0" required> ไม่เคย
                <input type="radio" name="question2" value="1"> น้อยมาก
                <input type="radio" name="question2" value="2"> บางครั้ง
                <input type="radio" name="question2" value="3"> บ่อย<br>
            </div>
            <div class="mb-3">
                <label>3. หลับยากหรือหลับๆ ตื่นๆ หรือหลับมากไป?</label><br>
                <input type="radio" name="question3" value="0" required> ไม่เคย
                <input type="radio" name="question3" value="1"> น้อยมาก
                <input type="radio" name="question3" value="2"> บางครั้ง
                <input type="radio" name="question3" value="3"> บ่อย<br>
            </div>
            <div class="mb-3">
                <label>4. เหนื่อยง่ายหรือไม่ค่อยมีแรง?</label><br>
                <input type="radio" name="question4" value="0" required> ไม่เคย
                <input type="radio" name="question4" value="1"> น้อยมาก
                <input type="radio" name="question4" value="2"> บางครั้ง
                <input type="radio" name="question4" value="3"> บ่อย<br>
            </div>
            <div class="mb-3">
                <label>5. เบื่ออาหาร หรือกินมากเกินไป?</label><br>
                <input type="radio" name="question5" value="0" required> ไม่เคย
                <input type="radio" name="question5" value="1"> น้อยมาก
                <input type="radio" name="question5" value="2"> บางครั้ง
                <input type="radio" name="question5" value="3"> บ่อย<br>
            </div>
            <div class="mb-3">
                <label>6. รู้สึกไม่ดีกับตัวเอง คิดว่าตัวเองล้มเหลว หรือทำให้ตนเองหรือครอบครัวผิดหวัง?</label><br>
                <input type="radio" name="question6" value="0" required> ไม่เคย
                <input type="radio" name="question6" value="1"> น้อยมาก
                <input type="radio" name="question6" value="2"> บางครั้ง
                <input type="radio" name="question6" value="3"> บ่อย<br>
            </div>
            <div class="mb-3">
                <label>7. สมาธิไม่ดีเวลาทำอะไร เช่น ดูโทรทัศน์ฟังวิทยุ หรือทำงานที่ต้องใช้ความตั้งใจ?</label><br>
                <input type="radio" name="question7" value="0" required> ไม่เคย
                <input type="radio" name="question7" value="1"> น้อยมาก
                <input type="radio" name="question7" value="2"> บางครั้ง
                <input type="radio" name="question7" value="3"> บ่อย<br>
            </div>
            <div class="mb-3">
                <label>8. พูดช้า ทำอะไรช้าลง จนคนอื่นสังเกตเห็นได้ หรือกระสับกระส่ายไม่สามารถอยู่นิ่งได้
                    เหมือนที่เคยเป็น?</label><br>
                <input type="radio" name="question8" value="0" required> ไม่เคย
                <input type="radio" name="question8" value="1"> น้อยมาก
                <input type="radio" name="question8" value="2"> บางครั้ง
                <input type="radio" name="question8" value="3"> บ่อย<br>
            </div>
            <div class="mb-3">
                <label>9. คิดทำร้ายตนเองหรือคิดว่าถ้าตายไปคงจะดี?</label><br>
                <input type="radio" name="question9" value="0" required> ไม่เคย
                <input type="radio" name="question9" value="1"> น้อยมาก
                <input type="radio" name="question9" value="2"> บางครั้ง
                <input type="radio" name="question9" value="3"> บ่อย<br>
            </div>
            <!-- เพิ่มคำถามที่เหลือเหมือนกับแบบประเมินเดิม โดยใช้ 4 ตัวเลือก -->
            <!-- ...คำถามที่ 2 ถึง 9... -->

            <div class="text-center">
                <input type="submit" value="ส่งแบบประเมิน" class="btn btn-primary">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>