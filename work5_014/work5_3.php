<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>โปรแกรมที่ประกาศตัวแปรอายุ</h3>
    <h3>Name: สหรัถ อินต๊ะวิรา ID: 65122250014</h3>
    <hr>

    <?php
    // ประกาศตัวเเปร $age ,กำหนดค่าเป็น 20
    $age = 20;

    // ประกาศตัวเเปร $age ,กำหนดค่าเป็น 45
    if ($age > 45) {
        echo "เป็นผู้ใหญ่";
    } 
    // ประกาศตัวเเปร $age ,กำหนดค่าเป็น 18
    else if ($age > 18) {
        echo "เป็นวัยรุ่น";
    }
    // ประกาศตัวเเปร $age ,กำหนดค่าเป็น 0
    else if ($age > 0) {
        echo "เป็นเด็ก";
    }
    else {
        echo "ยังไม่เกิด";
    }
    ?>
</body>

</html>