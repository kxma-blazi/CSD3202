<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>โปรแกรมที่ตรวจสอบการหารด้วยศูนย์ </h3>
    <h3>Name: สหรัถ อินต๊ะวิรา ID: 65122250014</h3>
    <hr>

    <form action="" method="post">
        <label for="num1">กรุณากรอกเลขที่ 1: </label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label for="num2">กรุณากรอกเลขที่ 2: </label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <input type="submit" value="Divide">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        try {
            if ($num2 == 0) {
                throw new Exception("ไม่สามารถหารด้วยศูนย์ได้");
            }
            $result = $num1 / $num2;
            echo "<p>Result: $num1 / $num2 = $result</p>";
        } catch (Exception $e) {
            echo "<p>Error: " . $e->getMessage() . "</p>";
        }
    }
    ?>
</body>

</html>