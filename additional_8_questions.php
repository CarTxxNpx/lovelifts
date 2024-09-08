<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>การประเมินเพิ่มเติม (8 ข้อ)</title>
</head>

<body>
    <div class="container mt-5">
        <h1>การประเมินเพิ่มเติม (8 ข้อ)</h1>

        <!-- ฟอร์มการประเมิน -->
        <form action="process_additional_8.php" method="post">
            <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>">
            <div class="mb-3">
                <!-- ตัวอย่างคำถามที่ 1 ใน 8 ข้อ -->
                <label>1. ในเดือนที่ผ่านมารวมทั้งวันนี้คิดอยากตายหรือคิดว่าตายไปจะดีกว่า. ?</label><br>
                <input type="radio" name="question1" value="1" required> ใช่
                <input type="radio" name="question1" value="0"> ไม่ใช่<br>
            </div>
            <div class="mb-3">
                <label>2. ตั้งแต่เดือนก่อนจนถึงวันนี้อยากทำร้ายตัวเองหรือทำให้ตัวเองบาดเจ็บ?</label><br>
                <input type="radio" name="question2" value="2" required> ใช่
                <input type="radio" name="question2" value="0"> ไม่ใช่<br>
            </div>
            <div class="mb-3">
                <label>3. ตั้งแต่เดือนก่อนจนถึงวันนี้คิดเกี่ยวกับการฆ่าตัวตาย ?</label><br>
                <input type="radio" name="question3" value="6" required> ใช่
                <input type="radio" name="question3" value="0"> ไม่ใช่<br>
            </div>
            <div class="mb-3">
                <label>4. ตั้งแต่เดือนก่อนจนถึงวันนี้มีแผนการที่จะฆ่าตัวตาย?</label><br>
                <input type="radio" name="question4" value="8" required> ใช่
                <input type="radio" name="question4" value="0"> ไม่ใช่<br>
            </div>
            <div class="mb-3">
                <label>5. ตั้งแต่เดือนก่อนจนถึงวันนี้ได้เตรียมการที่จะทำร้ายตัวเองหรือเตรียม
                    การจะฆ่าตัวตายโดยตั้งใจว่าจะให้ตายจริงๆ?</label><br>
                <input type="radio" name="question5" value="9" required> ใช่
                <input type="radio" name="question5" value="0"> ไม่ใช่<br>
            </div>
            <div class="mb-3">
                <label>6. ตั้งแต่เดือนก่อนจนถึงวันนี้ได้ทำให้ตนเองบาดเจ็บแต่ไม่ตั้งใจที่ทำให้เสียชีวิต?</label><br>
                <input type="radio" name="question6" value="4" required> ใช่
                <input type="radio" name="question6" value="0"> ไม่ใช่<br>
            </div>
            <div class="mb-3">
                <label>7. ตั้งแต่เดือนก่อนจนถึงวันนี้ได้ทำให้ตนเองบาดเจ็บแต่ไม่ตั้งใจที่ทำให้เสียชีวิต?</label><br>
                <input type="radio" name="question7" value="10" required> ใช่
                <input type="radio" name="question7" value="0"> ไม่ใช่<br>
            </div>
            <div class="mb-3">
                <label>8. ตลอดชีวิตที่ผ่านมาท่านเคยพยายามฆ่าตัวตาย?</label><br>
                <input type="radio" name="question8" value="4" required> ใช่
                <input type="radio" name="question8" value="0"> ไม่ใช่<br>
            </div>
            <!-- เพิ่มคำถามที่เหลือให้เหมือนกัน (ใช้ 2 ตัวเลือก ใช่/ไม่ใช่) -->
            <!-- ...คำถามที่ 2 ถึง 8... -->

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