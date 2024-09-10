<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>โปรแกรมแสดงผลลัพธ์ฟังก์ชันคณิตศาสตร์ </h3>
    <h3>Name: สหรัถ อินต๊ะวิรา ID: 65122250014</h3>
    <hr>

    <form action="" method="post">
        <label for="a">a:</label>
        <input type="text" name="a" id="a">
        <br>
        <label for="b">b:</label>
        <input type="text" name="b" id="b">
        <br>
        <input type="submit" value="คำนวณ">
    </form>

    <?php
    try {
        function math($a, $b)
        {
            $sum = $a + $b;
            $sub = $a - $b;
            $mul = $a * $b;

            if ($b == 0) {
                throw new Exception("ไม่สามารถหารด้วยศูนย์ได้");
            } else {
                $div = $a / $b;
            }
            return array($sum, $sub, $mul, $div ?? null);
        }

        $a = $_POST['a'];
        $b = $_POST['b'];

        $result = math($a, $b);
        echo "<p>ผลบวก: $result[0]</p>";
        echo "<p>ผลลบ: $result[1]</p>";
        echo "<p>ผลคูณ: $result[2]</p>";
        if ($result[3] !== null) {
            echo "<p>ผลหาร: $result[3]</p>";
        }
    } catch (Exception $e) {
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
    ?>
</body>

</html>