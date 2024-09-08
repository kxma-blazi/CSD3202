<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>ฟอร์มที่รับค่าคะแนนสอบ 3 วิชา</h3>
    <h3>Name: สหรัถ อินต๊ะวิรา ID: 65122250014</h3>
    <hr>

    <form action="" method="post">
        <label for="score1">คะแนนวิชาที่ 1:</label>
        <input type="number" max="100" name="score1" id="score1" required>
        <br>
        <label for="score2">คะแนนวิชาที่ 2:</label>
        <input type="number" max="100" name="score2" id="score2" required>
        <br>
        <label for="score3">คะแนนวิชาที่ 3:</label>
        <input type="number" max="100" name="score3" id="score3" required>
        <br>
        <input type="submit" value="ส่งข้อมูล">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score1 = $_POST['score1'];
        $score2 = $_POST['score2'];
        $score3 = $_POST['score3'];

        $mean = ($score1 + $score2 + $score3) / 3;
        echo "<p>คะแนนเฉลี่ย: $mean</p>";

        if ($mean > 80) {
            echo "<p>เกรด: A</p>";
        } else if ($mean > 70) {
            echo "<p>เกรด: B</p>";
        } else if ($mean > 60) {
            echo "<p>เกรด: C</p>";
        } else if ($mean > 50) {
            echo "<p>เกรด: D</p>";
        } else {
            echo "<p>เกรด: F</p>";
        }
    }
    ?>
</body>

</html>