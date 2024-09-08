<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>โปรแกรมที่ประกาศตัวแปรราคาและส่วนลด </h3>
    <h3>Name: สหรัถ อินต๊ะวิรา ID: 65122250014</h3>
    <hr>

    <?php
    $price = 2000;
    $discount = 0.1;

    if ($price >= 200) {
        echo "<p>ท่านได้รับส่วนลด 10%</p>";
        $total = $price - ($price * $discount);
    } else {
        echo "<p>ไม่มีส่วนลด</p>";
        $total = $price;
    }

    echo "<p>ราคา: $total</p>";
    ?>
</body>

</html>