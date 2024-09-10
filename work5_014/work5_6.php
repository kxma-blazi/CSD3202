<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>โปรแกรมที่ใช้ลูป</h3>
    <h3>Name: สหรัถ อินต๊ะวิรา ID: 65122250014</h3>
    <hr />

    <?php
    $status = "กำลังทำงาน";

    while ($status != "เสร็จสิ้น") {
        echo "กำลังทำงาน...\n";
        sleep(1);
        $status = "เสร็จสิ้น";
    }

    echo "เสร็จสิ้น!";
    ?>

</body>

</html>