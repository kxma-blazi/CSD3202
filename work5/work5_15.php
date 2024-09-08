<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>ฟังก์ชันคำนวณดัชนีมวลกาย (BMI)</h3>
    <h3>Name: สหรัถ อินต๊ะวิรา ID: 65122250014</h3>
    <hr>

    <form action="" method="post">
        <label for="weight">น้ำหนัก (kg):</label>
        <input type="text" name="weight" id="weight">
        <br>
        <label for="height">ส่วนสูง (m):</label>
        <input type="text" name="height" id="height">
        <br>
        <input type="submit" value="คำนวณ">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight = $_POST['weight'];
        $height = $_POST['height'];

        function bmi($weight, $height)
        {
            return $weight / (($height / 100) * ($height / 100));
        }

        $bmi = bmi($weight, $height);
        echo "<p>BMI: $bmi</p>";
    }
    ?>
</body>

</html>