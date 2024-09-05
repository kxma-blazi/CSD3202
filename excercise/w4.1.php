<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>ฟังก์ชันที่คำนวณพื้นที่ของสี่เหลี่ยมผืนผ้า </h3>
    <h3>name: สหรัถ อินต๊ะวิรา ID: 65122250014</h3>
    <hr>

    <?php 
    function rectangleArea($width, $height)
    {
        return $width * $height;
    }

    $area = rectangleArea(5, 10 );
    echo "$area";
    ?>
</body>

</html>