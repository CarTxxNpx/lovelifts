<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>การประเมินเพิ่มเติม (2 ข้อ)</title>
</head>

<body>
    <div class="container mt-5">
        <h1>การประเมินเพิ่มเติม (2 ข้อ)</h1>

        <!-- ฟอร์มการประเมิน -->
        <form action="process_additional_2.php" method="post">
            <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>">
            <div class="mb-3">
                <label>1. ใน 2 สัปดาห์ที่ผ่านมารวมวันนี้ "ท่านรู้สึก หดหูเศร้าหรือท้อแท้สิ้นหวังหรือไม่?</label><br>
                <input type="radio" name="question6" value="1" required> ใช่
                <input type="radio" name="question6" value="0"> ไม่ใช่<br>
            </div>
            <div class="mb-3">
                <label>2. ใน 2 สัปดาห์ที่ผ่านมารวมวันนี้" ท่านรู้สึกเบื่อ ทำอะไรก็ไม่เพลิดเพลินหรือไม่?</label><br>
                <input type="radio" name="question7" value="1" required> ใช่
                <input type="radio" name="question7" value="0"> ไม่ใช่<br>
            </div>
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